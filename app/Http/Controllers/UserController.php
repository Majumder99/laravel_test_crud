<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse {
        $user = User::all();

        return response()->json([
            'success' => true,
            'message' => 'Users retrieved successfully',
            'data' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): JsonResponse {
        $input = $request->validated();
        $user = User::create($input);
        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse {
        return response()->json([
            'success' => true,
            'message' => 'User retrieved successfully',
            'data' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user) {
        $input = $request->validated();
        $user->update($input);
        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
            'data' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(User $user): JsonResponse {
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully',
            'data' => []
        ]);
    }
}
