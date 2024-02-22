<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessSubmission;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubmissionController extends Controller
{   
    /**
     * Store user.
     *
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Dispatch a job to process the submission
        ProcessSubmission::dispatch($validatedData);

        // Return response
        return response()->json(['message' => 'Submission received'], Response::HTTP_CREATED);
    }
}
