@extends('layouts.vertical', ['title' => 'Tahun', 'sub_title' => 'Forms', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="grid lg:grid-cols-2 grid-cols-1 ">

    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">All Data</h4>
                <!-- <div class="flex items-center gap-2">
                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="PaginitionTableHtml">
                        <i class="mgc_eye_line text-lg"></i>
                        <span class="ms-2">Code</span>
                    </button>

                    <button class="btn-code" data-clipboard-action="copy">
                        <i class="mgc_copy_line text-lg"></i>
                        <span class="ms-2">Copy</span>
                    </button>
                </div> -->
            </div>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                        <div class="py-3 px-4">
                            <div class="relative max-w-xs">
                                <label for="table-with-pagination-search" class="sr-only">Search</label>
                                <input type="text" name="table-with-pagination-search" id="table-with-pagination-search" class="form-input ps-11" placeholder="Search for items">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewbox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        TAHUN</th>
                                        <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                            NAMA RT</th> -->
                                       
                                        <!-- <th scope="col" class="px-6 py-3 text-left center text-xs font-medium text-gray-500 uppercase">
                                            Action</th> -->
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            001</td>
                                        <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            ACO</td> -->
                                        <!-- <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('second', ['tables', 'update']) }}">
                                            <button type="button" class="btn bg-success text-white">Update</button>
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="btn bg-danger text-white">Delete</button>
                                        </td> -->
                                    </tr>

                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            001</td>
                                        <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            ACO</td> -->
                                        <!-- <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('second', ['tables', 'update']) }}">
                                            <button type="button" class="btn bg-success text-white">Update</button>
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="btn bg-danger text-white">Delete</button>
                                        </td> -->
                                    </tr>

                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            001</td>
                                        <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            ACO</td> -->
                                        <!-- <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('second', ['tables', 'update']) }}">
                                            <button type="button" class="btn bg-success text-white">Update</button>
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="btn bg-danger text-white">Delete</button>
                                        </td> -->
                                    </tr>

                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            001</td>
                                        <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            ACO</td> -->
                                        <!-- <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('second', ['tables', 'update']) }}">
                                            <button type="button" class="btn bg-success text-white">Update</button>
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="btn bg-danger text-white">Delete</button>
                                        </td> -->
                                    </tr>

                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            001</td>
                                        <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            ACO</td> -->
                                        <!-- <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ route('second', ['tables', 'update']) }}">
                                            <button type="button" class="btn bg-success text-white">Update</button>
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="btn bg-danger text-white">Delete</button>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex items-center py-1 px-12">
                            <nav class="flex items-center space-x-1">
                                <a class="text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full" href="#" aria-current="page">1</a>
                                <a class="w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">2</a>
                                <a class="w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full" href="#">3</a>
                                <a class="text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md" href="#">
                                    <span class="sr-only">Next</span>
                                    <span aria-hidden="true">»</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div id="PaginitionTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                <pre class="language-html h-56">
						<code>
							&lt;div class=&quot;overflow-x-auto&quot;&gt;
								&lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
									&lt;div class=&quot;border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700&quot;&gt;
										&lt;div class=&quot;py-3 px-4&quot;&gt;
											&lt;div class=&quot;relative max-w-xs&quot;&gt;
												&lt;label for=&quot;table-with-pagination-search&quot; class=&quot;sr-only&quot;&gt;Search&lt;/label&gt;
												&lt;input type=&quot;text&quot; name=&quot;table-with-pagination-search&quot; id=&quot;table-with-pagination-search&quot; class=&quot;form-input ps-11&quot; placeholder=&quot;Search for items&quot;&gt;
												&lt;div class=&quot;absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4&quot;&gt;
													&lt;svg class=&quot;h-3.5 w-3.5 text-gray-400&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;16&quot; height=&quot;16&quot; fill=&quot;currentColor&quot; viewBox=&quot;0 0 16 16&quot;&gt;
														&lt;path d=&quot;M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z&quot; &gt;
													&lt;/svg&gt;
												&lt;/div&gt;
											&lt;/div&gt;
										&lt;/div&gt;
										&lt;div class=&quot;overflow-hidden&quot;&gt;
											&lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
												&lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
													&lt;tr&gt;
														&lt;th scope=&quot;col&quot; class=&quot;py-3 px-4 pe-0&quot;&gt;
															&lt;div class=&quot;flex items-center h-5&quot;&gt;
																&lt;input id=&quot;table-pagination-checkbox-all&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
																&lt;label for=&quot;table-pagination-checkbox-all&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
															&lt;/div&gt;
														&lt;/th&gt;
														&lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Name&lt;/th&gt;
														&lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Age&lt;/th&gt;
														&lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase&quot;&gt;Address&lt;/th&gt;
														&lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase&quot;&gt;Action&lt;/th&gt;
													&lt;/tr&gt;
												&lt;/thead&gt;
												&lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
													&lt;tr&gt;
														&lt;td class=&quot;py-3 ps-4&quot;&gt;
															&lt;div class=&quot;flex items-center h-5&quot;&gt;
																&lt;input id=&quot;table-pagination-checkbox-1&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
																&lt;label for=&quot;table-pagination-checkbox-1&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
															&lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
														&lt;/td&gt;
													&lt;/tr&gt;

													&lt;tr&gt;
														&lt;td class=&quot;py-3 ps-4&quot;&gt;
															&lt;div class=&quot;flex items-center h-5&quot;&gt;
																&lt;input id=&quot;table-pagination-checkbox-2&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
																&lt;label for=&quot;table-pagination-checkbox-2&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
															&lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
														&lt;/td&gt;
													&lt;/tr&gt;

													&lt;tr&gt;
														&lt;td class=&quot;py-3 ps-4&quot;&gt;
															&lt;div class=&quot;flex items-center h-5&quot;&gt;
																&lt;input id=&quot;table-pagination-checkbox-3&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
																&lt;label for=&quot;table-pagination-checkbox-3&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
															&lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
														&lt;/td&gt;
													&lt;/tr&gt;

													&lt;tr&gt;
														&lt;td class=&quot;py-3 ps-4&quot;&gt;
															&lt;div class=&quot;flex items-center h-5&quot;&gt;
																&lt;input id=&quot;table-pagination-checkbox-4&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
																&lt;label for=&quot;table-pagination-checkbox-4&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Edward King&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;16&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;LA No. 1 Lake Park&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
															&lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
														&lt;/td&gt;
													&lt;/tr&gt;

													&lt;tr&gt;
														&lt;td class=&quot;py-3 ps-4&quot;&gt;
															&lt;div class=&quot;flex items-center h-5&quot;&gt;
																&lt;input id=&quot;table-pagination-checkbox-5&quot; type=&quot;checkbox&quot; class=&quot;form-checkbox rounded&quot;&gt;
																&lt;label for=&quot;table-pagination-checkbox-5&quot; class=&quot;sr-only&quot;&gt;Checkbox&lt;/label&gt;
															&lt;/div&gt;
														&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Red&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Melbourne No. 1 Lake Park&lt;/td&gt;
														&lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
															&lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
														&lt;/td&gt;
													&lt;/tr&gt;
												&lt;/tbody&gt;
											&lt;/table&gt;
										&lt;/div&gt;
										&lt;div class=&quot;py-1 px-4&quot;&gt;
											&lt;nav class=&quot;flex items-center space-x-2&quot;&gt;
												&lt;a class=&quot;text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md&quot; href=&quot;#&quot;&gt;
													&lt;span aria-hidden=&quot;true&quot;&gt;&laquo;&lt;/span&gt;
													&lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
												&lt;/a&gt;
												&lt;a class=&quot;w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full&quot; href=&quot;#&quot; aria-current=&quot;page&quot;&gt;1&lt;/a&gt;
												&lt;a class=&quot;w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
												&lt;a class=&quot;w-10 h-10 text-gray-400 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
												&lt;a class=&quot;text-gray-400 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-md&quot; href=&quot;#&quot;&gt;
													&lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
													&lt;span aria-hidden=&quot;true&quot;&gt;&raquo;&lt;/span&gt;
												&lt;/a&gt;
											&lt;/nav&gt;
										&lt;/div&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/div&gt;
						</code>
					</pre>
            </div>
        </div>
    </div>
    <!-- end card -->

</div>
@endsection

@section('script')
@vite(['resources/js/pages/highlight.js'])
@endsection