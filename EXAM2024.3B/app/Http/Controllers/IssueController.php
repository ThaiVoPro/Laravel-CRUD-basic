<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $numberOfRecord = Issue::count();
        $perPage = 10;
        $numberOfPage = $numberOfRecord % $perPage == 0?
             (int) ($numberOfRecord / $perPage): (int) ($numberOfRecord / $perPage) + 1;
        $pageIndex = 1;
        if($request->has('pageIndex'))
            $pageIndex = $request->input('pageIndex');
        if($pageIndex < 1) $pageIndex = 1;
        if($pageIndex > $numberOfPage) $pageIndex = $numberOfPage;
        //
        $issues =  Issue::orderByDesc('id')
                ->skip(($pageIndex-1)*$perPage)
                ->take($perPage)
                ->get();
        // dd($arr);
        return view('index', compact( 'issues', 'numberOfPage', 'pageIndex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $computers = Computer::all();
        return view('create', compact('computers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Issue::create($request->all());
        return redirect()->route('issues.index')->with('mes', 'Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue,Request $request)
    {
        //
        $pageIndex = 1;
        if ($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
        // show
        $computer = Computer::where('id', $issue->id)->first();
        return view('show', compact('issue', 'computer', 'pageIndex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue, Request $request)
    {
        //
        $pageIndex = 1;
        if ($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
        // show form edit
        $computers = Computer::all();
        return view('edit', compact('issue', 'computers', 'pageIndex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    {
        //
        $pageIndex = 1;
        if ($request->has('pageIndex')) $pageIndex = $request->input('pageIndex');
        echo $pageIndex;
        // update
        $issue->update($request->all());
        return redirect()->route('issues.index', ['pageIndex' => $pageIndex])->with('mes', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue, Request $request)
    {
        //
        $pageIndex = 1;
        if($request->has('pageIndex'))  $pageIndex = $request->input('pageIndex');
        $issue->delete();
        return redirect()->route('issues.index', ['pageIndex' => $pageIndex])->with('mes', 'Delete Successfully');
    }
}
