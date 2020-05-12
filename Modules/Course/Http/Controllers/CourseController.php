<?php

namespace Modules\Course\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Course\Entities\Course;
use Modules\Course\Transformers\Course as CourseResource;
use Modules\Course\Transformers\CourseCollection as CourseCollectionResource;

class CourseController extends Controller
{
    /**
     * Fetch a list of courses.
     * @group Course
     * @return \Modules\Course\Transformers\CourseCollection
     */
    public function index()
    {
        $courses = Course::all();
        return new CourseCollectionResource($courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Modules\Course\Transformers\Course
     */
    public function store(Request $request)
    {
        $courseName = $request->input('title');

        $request->validate([
            'title'   => 'required|min:3|max:50',
        ]);

        $course = new Course;
        $course->user_id = Auth::id();
        $course->title = $courseName;
        $course->save();

        return new CourseResource($course);
    }

    /**
     * Update the specified resource in storage.
     * @group Course
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @group Course
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
