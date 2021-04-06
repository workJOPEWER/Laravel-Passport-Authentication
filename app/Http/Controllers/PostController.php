<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{

	public function allPosts()
	{
		$posts = Post::all();

		if ($posts) {
			return PostResource::collection( $posts );
		}

		return response()->json( 'No post found' );
	}

	/**
	 * Display a listing of the resource.
	 *
	 */
	public function index()
	{
		$userId = $this->_userId();
		$posts = Post::where( 'user_id', $userId )->get();

		if ($posts) {
			return PostResource::collection( $posts );
		}

		return response()->json( 'No post found' );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return PostResource
	 */
	public function store(Request $request)
	{
		$post = new Post();

		$post->user_id = $this->_userId();
		$post->title = $request->title;
		$post->detail = $request->detail;

		if ($post->save()) {
			return new PostResource( $post );
		}

		return response()->json( 'Post not created' );

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Post $post
	 * @return PostResource
	 */
	public function show(Post $post)
	{
		if ($post) {
			return new PostResource( $post );
		}

		return response()->json( 'No post found for you' );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return PostResource
	 */
	public function update(Request $request, $id)
	{
		$post = $this->_post( $id );

		if ($post) {
			$post->title = $request->title;
			$post->detail = $request->detail;
			$post->save();
			return new PostResource( $post );
		}

		return response()->json( 'No post found for you' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $id
	 * @return PostResource
	 */
	public function destroy($id)
	{
		$post = $this->_post( $id );

		if ($post) {
			$post->delete();
			return new PostResource( $post );
		}

		return response()->json( 'No post found for you' );
	}

	protected function _userId()
	{
		return auth('api')->user()->id;
	}

	protected function _post($id)
	{
		$userId = $this->_userId();
		$post = Post::where( 'user_id', $userId )->where( 'id', $id )->first();
		return $post;
	}
}
