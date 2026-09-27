<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="view-transition" content="same-origin" />
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://jsdelivr.net"></script>
</head>

<style>
    [x-cloak] { display: none !important; }
</style>

<body x-data="{ isLoaded: false }" x-init="isLoaded = true" class="bg-gray-50 text-gray-800 min-h-screen p-8 flex flex-col items-center overflow-x-hidden">
    <main class="min-h-screen flex items-center">
        <div x-show="activePage === 'page1'"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 -translate-x-12"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 absolute"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 -translate-x-12"
            class="h-full max-w-4xl mx-auto px-6">

            <!-- Right Side: Interactive Registration Form & File Dropzone (7 Columns) -->
            <form class="border-x-2 border-t-2 text-center underline border-[#fda761be] self-center p-6 rounded-tl-lg rounded-tr-lg pb-8 " action="#" method="POST">
                <label class="w-full">
                    <span class="text-lg">Complete the required information and upload the necessary documents to submit your application.</span>
                </label>

            </form>

            <!-- CONTENT -->
            <form class="flex flex-col border-x-2 border-b-2 border-[#fda761be] self-center shadow-xl/30 p-6 rounded-br-lg rounded-bl-lg" action="#" method="POST">

                <label class="w-full">
                    <span class="text-lg">Program Selection</span>
                </label>

                <div class="flex flex-row gap-4">
                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Student Type</span>
                        </label>
                        <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                            <option value="New Student (College)">New Student (College)</option>
                            <option value="Transferee (College)">Transferee College</option>
                            <option value="Returning Student">Returning Student</option>
                        </select>
                    </div>
                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Academic Level</span>
                        </label>
                        <input type="text" placeholder="College" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none" readonly>
                    </div>
                </div>

                <div>
                    <label>
                        <span class="text-[10px] font-bold text-slate-400">Desired Course</span>
                    </label>
                    <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                        <option value="BS Information Systems (BSIS)">BS Information Systems (BSIS)</option>
                        <option value="BS Computer Science (BSCS)">BS Computer Science (BSCS)</option>
                        <option value="BS Accounting Information Systems (BSAIS)">BS Accounting Information Systems (BSAIS)</option>
                        <option value="BS Entrepreneurship (BSEntrep)">BS Entrepreneurship (BSEntrep)</option>
                    </select>
                </div>


                <!-- Row: Direct Confirmation Checkbox -->
                <label class="flex items-start gap-2.5 cursor-pointer pt-1 mt-6">
                    <input type="checkbox" required class="mt-0.5 size-4 rounded accent-indigo-600 cursor-pointer" />
                    <span class="text-xs font-medium text-slate-500 leading-tight">
                        I declare all provided profiles are accurate and give permission to sync data across school management indexes.
                    </span>
                </label>

                <!-- Row: Interactive Form Action Buttons -->
                <div class="flex items-center justify-end gap-3 pt-2">
                    <a href="{{ route('homepage') }}" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 active:bg-slate-100 transition-colors">
                        Back to Homepage
                    </a>
                    <!-- FIX 5: Removed href navigation constraint entirely so Alpine handles state swap without forced refresh -->
                    <button type="button" @click="activePage = 'page2'" class="px-5 py-2 bg-[#EB601E] hover:bg-orange-600 text-white text-sm font-medium rounded-lg shadow-md transition-all active:scale-[0.98]">
                        Next
                    </button>
                </div>
            </form>
        </div>


        
        <div x-show="activePage === 'page2'"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 -translate-x-12"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300 absolute"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 -translate-x-12"
            class="h-full max-w-4xl mx-auto px-6" x-cloak>

            <!-- Right Side: Interactive Registration Form & File Dropzone (7 Columns) -->
            <form class="border-x-2 border-t-2 text-center underline border-[#fda761be] self-center p-6 rounded-tl-lg rounded-tr-lg pb-8 " action="#" method="POST">
                <label class="w-full">
                    <span class="text-lg">[PAGE 2]Complete the required information and upload the necessary documents to submit your application.</span>
                </label>

            </form>

            <!-- CONTENT -->
            <form class="flex flex-col border-x-2 border-b-2 border-[#fda761be] self-center shadow-xl/30 p-6 rounded-br-lg rounded-bl-lg" action="#" method="POST">

                <label class="w-full">
                    <span class="text-lg">Program Selection</span>
                </label>

                <div class="flex flex-row gap-4">
                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Student Type</span>
                        </label>
                        <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                            <option value="New Student (College)">New Student (College)</option>
                            <option value="Transferee (College)">Transferee College</option>
                            <option value="Returning Student">Returning Student</option>
                        </select>
                    </div>
                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Academic Level</span>
                        </label>
                        <input type="text" placeholder="College" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none" readonly>
                    </div>
                </div>

                <div>
                    <label>
                        <span class="text-[10px] font-bold text-slate-400">Desired Course</span>
                    </label>
                    <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                        <option value="BS Information Systems (BSIS)">BS Information Systems (BSIS)</option>
                        <option value="BS Computer Science (BSCS)">BS Computer Science (BSCS)</option>
                        <option value="BS Accounting Information Systems (BSAIS)">BS Accounting Information Systems (BSAIS)</option>
                        <option value="BS Entrepreneurship (BSEntrep)">BS Entrepreneurship (BSEntrep)</option>
                    </select>
                </div>


                <!-- Row: Direct Confirmation Checkbox -->
                <label class="flex items-start gap-2.5 cursor-pointer pt-1 mt-6">
                    <input type="checkbox" required class="mt-0.5 size-4 rounded accent-indigo-600 cursor-pointer" />
                    <span class="text-xs font-medium text-slate-500 leading-tight">
                        I declare all provided profiles are accurate and give permission to sync data across school management indexes.
                    </span>
                </label>

                <!-- Row: Interactive Form Action Buttons -->
                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" @click="activePage = 'page1'" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 transition-colors">
                        ← Back to Step 1
                    </button>
                    <button type="submit" class="px-5 py-2 bg-gray-900 hover:bg-black text-white text-sm font-medium rounded-lg shadow-md transition-all active:scale-[0.98]">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>