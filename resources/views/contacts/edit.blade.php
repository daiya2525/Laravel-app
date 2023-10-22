<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            編集画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action={{ route('contacts.update', ['id' => $contact->id ]) }} method="post">
                        @csrf
                        <section class="text-gray-600 body-font relative">
                            <div class="container px-5 mx-auto">
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                                <input type="text" id="name" name="name"
                                                    value="{{ $contact->name }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="text" class="leading-7 text-sm text-gray-600">件名</label>
                                                <input type="text" id="title" name="title"
                                                    value="{{ $contact->title }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="email"
                                                    class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                                <input type="text" id="email" name="email"
                                                    value="{{ $contact->email }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="url"
                                                    class="leading-7 text-sm text-gray-600">ホームページ</label>
                                                <input type="text" id="url" name="url"
                                                    value="{{ $contact->url }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <p class="text-sm text-gray-600">性別</p>
                                            <div
                                                class="flex items-center pl-4 border border-gray-200 w-[70%] rounded dark:border-gray-700">
                                                <input id="gender-1" type="radio" value="0"
                                                    @if ($contact->gender === 0) checked @endif name="gender"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="gender-1"
                                                    class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">男性</label>
                                            </div>
                                            <div
                                                class="flex items-center pl-4 border border-gray-200 w-[70%] rounded dark:border-gray-700 mt-4">
                                                <input id="gender-2" type="radio" value="1"
                                                    @if ($contact->gender === 1) checked @endif name="gender"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="gender-2"
                                                    class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">女性</label>
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <label for="age" class="sr-only">年齢</label>
                                            <select id="age" name="age"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                                <option value="">選択してください</option>
                                                <option value="1" @if ($contact->age === 1) selected @endif>
                                                    〜19歳</option>
                                                <option value="2" @if ($contact->age === 2) selected @endif>20歳〜29歳</option>
                                                <option value="3" @if ($contact->age === 3) selected @endif>30歳〜39歳</option>
                                                <option value="4" @if ($contact->age === 4) selected @endif>40歳〜49歳</option>
                                                <option value="5" @if ($contact->age === 5) selected @endif>50歳〜59歳</option>
                                                <option value="6" @if ($contact->age === 6) selected @endif>60歳〜</option>
                                            </select>
                                        </div>


                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="contact"
                                                    class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                                <textarea id="contact" name="contact"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $contact->contact }}</textarea>
                                            </div>
                                        </div>

                                        <div class="p-2 w-full">
                                            <button
                                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-[40px]">更新する</button>
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
