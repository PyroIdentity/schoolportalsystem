<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="view-transition" content="same-origin" />
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="{ isLoaded: false }" x-init="isLoaded = true" class="bg-gray-50 text-gray-800 min-h-screen p-8 flex flex-col items-center overflow-x-hidden
bg-[url('../images/orangeStudent.png')] bg-cover bg-center">
    <main class="min-h-screen flex items-center" x-data="{ activeCard: 'page1' }">
        <div x-show="activeCard === 'page1'" x-transition
            class="h-full max-w-4xl mx-auto px-6">

            <!-- Right Side: Interactive Registration Form & File Dropzone (7 Columns) -->
            <form class="border-x-4 border-t-4 text-center underline border-[#fda761] self-center p-6 rounded-tl-lg rounded-tr-lg pb-8 
            bg-[#ffffff]" action="#">
                <label class="w-full">
                    <span class="text-lg">Complete the required information and upload the necessary documents to submit your application.</span>
                </label>

            </form>

            <!-- CONTENT -->
            <form class="flex flex-col border-x-4 border-b-4 border-[#fda761] self-center shadow-xl/30 p-6 rounded-br-lg rounded-bl-lg
            bg-[#ffffff]" action="#">

                <label class="w-full">
                    <span class="text-lg">Program Selection</span>
                </label>

                <div class="flex flex-row gap-4">
                    <div class="w-1/2">
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Student Type</span>
                        </label>
                        <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                            <option value="New Student (College)">New Student (College)</option>
                            <option value="Transferee (College)">Transferee College</option>
                            <option value="Returning Student">Returning Student</option>
                        </select>
                    </div>
                    <div class="w-1/2">
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

                <!-- Row: Interactive Form Action Buttons -->
                <div class="flex items-center justify-end gap-3 pt-2">
                    <span class="text-xs font-medium text-slate-500 leading-tight me-auto">
                        Page 1
                    </span>
                    <a href="{{ route('homepage') }}" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 active:bg-slate-100 transition-colors">
                        Back to Homepage
                    </a>
                    <!-- FIX 5: Removed href navigation constraint entirely so Alpine handles state swap without forced refresh -->
                    <button type="button" @click="activeCard = 'page2'" class="px-5 py-2 bg-[#EB601E] hover:bg-orange-600 text-white text-sm font-medium rounded-lg shadow-md transition-all active:scale-[0.98]">
                        Next Page
                    </button>
                </div>
            </form>
        </div>



        <div x-show="activeCard === 'page2'" x-transition
            class="h-full max-w-4xl mx-auto px-6">

            <!-- Right Side: Interactive Registration Form & File Dropzone (7 Columns) -->
            <form class="border-x-4 border-t-4 text-center underline border-[#fda761] self-center p-6 rounded-tl-lg rounded-tr-lg pb-8 
            bg-[#ffffff]" action="#">
                <label class="w-full">
                    <span class="text-lg">[PAGE 2]Complete the required information and upload the necessary documents to submit your application.</span>
                </label>

            </form>

            <!-- CONTENT -->
            <form class="flex flex-col border-x-4 border-b-4 border-[#fda761] self-center shadow-xl/30 p-6 rounded-br-lg rounded-bl-lg
            bg-[#ffffff]" action="#">

                <label class="w-full">
                    <span class="text-lg">Personal Information</span>
                </label>

                <div class="flex flex-row gap-4">

                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Last Name</span>
                        </label>
                        <input type="text" placeholder="Gonzales" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                    </div>

                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">First Name</span>
                        </label>
                        <input type="text" placeholder="Jocelyn" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                    </div>

                    <div>
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Middle Name</span>
                        </label>
                        <input type="text" placeholder="Reyes" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                    </div>

                    <div class="w-24">
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Gender</span>
                        </label>
                        <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-row gap-4">
                    <div class="w-1/2">
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Contact Number</span>
                        </label>
                        <input type="text" placeholder="0917 123 4567" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                    </div>

                    <div class="w-1/2">
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Email Address</span>
                        </label>
                        <input type="text" placeholder="abc@gmail.com" class="w-full bg-slate-50 border  border-slate-200 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                    </div>
                </div>


                <!-- Row: Interactive Form Action Buttons -->
                <div class="flex items-center justify-end gap-3 pt-2">
                    <span class="text-xs font-medium text-slate-500 leading-tight me-auto">
                        Page 2
                    </span>
                    <button type="button" @click="activeCard = 'page1'" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 transition-colors">
                        ← Back to Step 1
                    </button>
                    <button type="button" @click="activeCard = 'page3'" class="px-5 py-2 bg-[#EB601E] hover:bg-orange-600 text-white text-sm font-medium rounded-lg shadow-md transition-all active:scale-[0.98]">
                        Next Page
                    </button>
                </div>
            </form>
        </div>

        <div x-show="activeCard === 'page3'" x-transition
            class="h-full max-w-4xl mx-auto px-6">

            <!-- Right Side: Interactive Registration Form & File Dropzone (7 Columns) -->
            <form class="border-x-4 border-t-4 text-center underline border-[#fda761] self-center p-6 rounded-tl-lg rounded-tr-lg pb-8 
            bg-[#ffffff]" action="#">
                <label class="w-full">
                    <span class="text-lg">[PAGE 2]Complete the required information and upload the necessary documents to submit your application.</span>
                </label>

            </form>

            <!-- CONTENT -->
            <form class="flex flex-col border-x-4 border-b-4 border-[#fda761] self-center shadow-xl/30 p-6 rounded-br-lg rounded-bl-lg
            bg-[#ffffff]" action="#">

                <label class="w-full">
                    <span class="text-lg">Program Selection</span>
                </label>

                <div class="flex flex-row gap-4">
                    <div class="w-1/2">
                        <label>
                            <span class="text-[10px] font-bold text-slate-400">Student Type</span>
                        </label>
                        <select class="w-full bg-slate-50 border  border-slate-200  rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-[#EB601E] outline-none">
                            <option value="New Student (College)">New Student (College)</option>
                            <option value="Transferee (College)">Transferee College</option>
                            <option value="Returning Student">Returning Student</option>
                        </select>
                    </div>
                    <div class="w-1/2">
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
                    <span class="text-xs font-medium text-slate-500 leading-tight me-auto">
                        Page 3
                    </span>
                    <button type="button" @click="activeCard = 'page2'" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 transition-colors">
                        ← Back to Step 2
                    </button>
                    <button type="button" class="px-5 py-2 bg-[#EB601E] hover:bg-orange-600 text-white text-sm font-medium rounded-lg shadow-md transition-all active:scale-[0.98]">
                        Next Page
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>