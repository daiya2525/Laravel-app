<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a type="button" href='{{ route('contacts.create') }}'
                        class="text-white bg-blue-400 dark:bg-blue-500 hover:opacity-70 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-[fit-content] ml-auto block"
                        disabled>新規作成</a>

                    <div class="w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap mt-[40px]">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        id</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        名前</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        件名</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        作成日</th>
                                    <th
                                        class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->title }}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3 text-lg">
                                            {{ $contact->created_at }}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3 text-lg">
                                            <a href='{{ route('contacts.show', ['id' => $contact->id ]) }}'
                                                class="text-white whitespace-nowrap bg-blue-400 dark:bg-blue-500 hover:opacity-70 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-[fit-content] block"
                                                disabled>詳細</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
