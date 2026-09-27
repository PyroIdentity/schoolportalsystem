<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-4xl mx-auto px-6">
        
        <!-- Right Side: Interactive Registration Form & File Dropzone (7 Columns) -->
        <form class="border-2 border-indigo-600" action="#" method="POST">

            <!-- Row: Direct Confirmation Checkbox -->
            <label class="flex items-start gap-2.5 cursor-pointer pt-1">
                <input type="checkbox" required class="mt-0.5 size-4 rounded accent-indigo-600 cursor-pointer" />
                <span class="text-xs font-medium text-slate-500 leading-tight">
                    I declare all provided profiles are accurate and give permission to sync data across school management indexes.
                </span>
            </label>

            <!-- Row: Interactive Form Action Buttons -->
            <div class="flex items-center justify-end gap-3 pt-2">
                <button type="button" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 active:bg-slate-100 transition-colors">
                    Clear Data
                </button>
                <button type="submit" class="px-5 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all active:scale-[0.98]">
                    Submit Registration
                </button>
            </div>
        </form>
    </div>

</body>
</html>