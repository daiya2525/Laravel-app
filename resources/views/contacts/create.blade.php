<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="" method="post">
                        @csrf
                        <section class="text-gray-600 body-font relative">
                            <div class="container px-5 mx-auto">
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                                <input type="text" id="name" name="name"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="text" class="leading-7 text-sm text-gray-600">件名</label>
                                                <input type="text" id="title" name="title"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="email"
                                                    class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                                <input type="text" id="email" name="email"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="url"
                                                    class="leading-7 text-sm text-gray-600">ホームページ</label>
                                                <input type="text" id="url" name="url"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <p class="text-sm text-gray-600">性別</p>
                                            <div
                                                class="flex items-center pl-4 border border-gray-200 w-[70%] rounded dark:border-gray-700">
                                                <input id="gender-1" type="radio" value="0" name="gender"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="gender-1"
                                                    class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">男性</label>
                                            </div>
                                            <div
                                                class="flex items-center pl-4 border border-gray-200 w-[70%] rounded dark:border-gray-700 mt-4">
                                                <input checked id="gender-2" type="radio" value="1"
                                                    name="gender"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="gender-2"
                                                    class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">女性</label>
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <label for="age" class="sr-only">年齢</label>
                                            <select id="age"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                                <option value="">選択してください</option>
                                                <option value="1">〜19歳</option>
                                                <option value="2">20歳〜29歳</option>
                                                <option value="3">30歳〜39歳</option>
                                                <option value="4">40歳〜49歳</option>
                                                <option value="5">50歳〜59歳</option>
                                                <option value="6">60歳〜</option>
                                            </select>
                                        </div>


                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="contact"
                                                    class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                                <textarea id="contact" name="contact"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                            </div>
                                        </div>

                                        <div class="inline-flex items-center">
                                            <label class="relative flex items-center p-3 rounded-full cursor-pointer"
                                                for="caution" data-ripple-dark="true">
                                                <input id="caution" name="caution" type="checkbox"
                                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" />
                                                <div
                                                    class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                        viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                        stroke-width="1">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none"
                                                for="caution">
                                                注意事項に同意する
                                            </label>
                                        </div>

                                        <div class="p-2 w-full">
                                            <button
                                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録する</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
