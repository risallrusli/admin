@extends('layouts.vertical', ['title' => 'Update Data', 'sub_title' => 'Forms', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="grid lg:grid-cols-1 grid-cols-1 ">
    <div class="card">
        <div class="card-header">
            <div class="flex justify-between items-center">
                <h4 class="card-title">Form Update Data</h4>
                <!-- <div class="flex items-center gap-2">
                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="BasicHtml">
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
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="text-gray-800 text-sm font-medium inline-block mb-2">NIK</label>
                    <input type="text" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Induk KTP">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="text-gray-800 text-sm font-medium inline-block mb-2">KK</label>
                    <input type="text" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kartu Keluarga">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="text-gray-800 text-sm font-medium inline-block mb-2">Tahun</label>
                    <input type="text" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="text-gray-800 text-sm font-medium inline-block mb-2">Bulan</label>
                    <input type="text" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bulan">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="text-gray-800 text-sm font-medium inline-block mb-2">Pembayaran</label>
                    <input type="text" class="form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pembayaran">
                </div>
                <button type="submit" class="btn bg-primary text-white">Update</button>
            </form>
            <div id="BasicHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                <pre class="language-html h-56">
                    <code>
                        &lt;form&gt;
                            &lt;div class=&quot;mb-3&quot;&gt;
                                &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Email address&lt;/label&gt;
                                &lt;input type=&quot;email&quot; class=&quot;form-input&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
                                &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-sm text-slate-700 dark:text-slate-400&quot;&gt;We'll never share your email
                                    with anyone else.&lt;/small&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;mb-3&quot;&gt;
                                &lt;label for=&quot;exampleInputPassword1&quot; class=&quot;text-gray-800 text-sm font-medium inline-block mb-2&quot;&gt;Password&lt;/label&gt;
                                &lt;input type=&quot;password&quot; class=&quot;form-input&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;flex items-center gap-2 mb-3&quot;&gt;
                                &lt;input type=&quot;checkbox&quot; class=&quot;form-checkbox rounded border border-gray-200&quot; id=&quot;checkmeout0&quot;&gt;
                                &lt;label class=&quot;text-gray-800 text-sm font-medium inline-block&quot; for=&quot;checkmeout0&quot;&gt;Check me out !&lt;/label&gt;
                            &lt;/div&gt;
                            &lt;button type=&quot;submit&quot; class=&quot;btn bg-primary text-white&quot;&gt;Submit&lt;/button&gt;
                        &lt;/form&gt;
                    </code>
                </pre>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
@vite(['resources/js/pages/highlight.js'])
@endsection