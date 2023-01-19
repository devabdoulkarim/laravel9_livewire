<div>
    <main>

        <div wire:id="zPROna7yrW094NFvomz2" wire:init="loadItems">

            <div wire:loading="" class="w-full">
                <div class="flex justify-center items-center mt-32">
                    <svg class="animate-spin w-24 h-24 fill-primary-700 dark:fill-primary-400" width="24px"
                        height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z">
                        </path>
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                    </svg>
                </div>
            </div>


            <div class="py-12" wire:loading.remove="">
                <div class="pr-0 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div
                        class="p-5 overflow-hidden text-gray-800 shadow-xl lg:px-0 sm:px-10 bg-gray-50 sm:rounded-lg lg:rounded-3xl dark:bg-gray-900 dark:text-gray-400">
                        <div class="flex flex-wrap items-center">
                            <div class="relative flex-row flex-1 w-full max-w-full px-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Membres</font>
                                            </font>
                                        </h3>
                                    </div>
                                    <div class="ml-4">
                                        <button style="background-color:red" type="submit"
                                            class="inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop text-white rounded-lg dark:text-gray-300 bg-primary-600 dark:bg-primary-700 hover:bg-primary-700 focus:border-primary-900 focus:ring-primary-300"
                                            wire:click="selectedItem('create',null)">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Ajouter un membre
                                                </font>
                                            </font>
                                        </button>
                                    </div>
                                </div>

                                <div class="relative grid grid-cols-6 gap-6 mt-2 ">

                                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="search">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    recherche
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop block w-full mt-1"
                                            wire:model="term" id="search" type="text" autocomplete="off">
                                    </div>

                                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    selon le rôle
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="role" wire:key="roleTerm">
                                            <option value="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Tous les rôles</font>
                                                </font>
                                            </option>
                                            <option value="1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Administrateur</font>
                                                </font>
                                            </option>
                                            <option value="2">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Administrateur</font>
                                                </font>
                                            </option>
                                            <option value="3">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Modérateur</font>
                                                </font>
                                            </option>
                                            <option value="4">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Utilisateur</font>
                                                </font>
                                            </option>
                                            <option value="5">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">banni</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    par état
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="country" wire:key="countryTerm">
                                            <option value="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Tous les pays</font>
                                                </font>
                                            </option>
                                            <option value="1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Arabie Saoudite</font>
                                                </font>
                                            </option>
                                            <option value="2">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Emirats Arabes Unis</font>
                                                </font>
                                            </option>
                                            <option value="3">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Koweit</font>
                                                </font>
                                            </option>
                                            <option value="4">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Qatar</font>
                                                </font>
                                            </option>
                                            <option value="5">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Bahreïn</font>
                                                </font>
                                            </option>
                                            <option value="6">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Oman</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Trier par
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="orderBy">
                                            <option value="id">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">IDENTIFIANT</font>
                                                </font>
                                            </option>
                                            <option value="name">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Le nom</font>
                                                </font>
                                            </option>
                                            <option value="username">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Nom d'utilisateur</font>
                                                </font>
                                            </option>
                                            <option value="email">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">E-mail</font>
                                                </font>
                                            </option>
                                            <option value="role_id">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">rôle</font>
                                                </font>
                                            </option>
                                            <option value="country_id">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Pays</font>
                                                </font>
                                            </option>
                                            <option value="last_seen">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Vu pour la dernière fois
                                                    </font>
                                                </font>
                                            </option>
                                            <option value="created_at">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Ajouter du temps</font>
                                                </font>
                                            </option>
                                            <option value="updated_at">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">temps de réglage</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    nombre d'objets
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="perPage">
                                            <option value="10">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">dix</font>
                                                </font>
                                            </option>
                                            <option value="25">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">25</font>
                                                </font>
                                            </option>
                                            <option value="50">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">50</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Voir le classement
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="sortBy">
                                            <option value="asc">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Progressive</font>
                                                </font>
                                            </option>
                                            <option value="desc">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">descendant</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="trashed">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Afficher supprimé
                                                </font>
                                            </font>
                                        </label>
                                        <input type="checkbox"
                                            class="form-check-input appearance-none bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md checked:bg-primary-600 dark:checked:bg-primary-600 checked:border-primary-600 active:bg-primary-800 checked:focus:bg-primary-800 checked:hover:bg-primary-800 focus:outline-none focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 transition duration-200 align-top bg-no-repeat bg-center bg-contain cursor-pointer disabled:opacity-75 disabled:cursor-no-drop block mt-3 w-7 h-7"
                                            wire:model="trashed" value="true">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-0 overflow-hidden mt-7">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <thead>
                                        <tr
                                            class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700/30">
                                            <th class="w-10 px-2 py-3 text-center">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">IDENTIFIANT</font>
                                                </font>
                                            </th>
                                            <th class="px-4 py-3">
                                                <span>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nom </font>
                                                    </font>
                                                </span>
                                                <span class="text-xx">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">/ nom d'utilisateur
                                                        </font>
                                                    </font>
                                                </span>
                                            </th>
                                            <th class="px-2 py-3 text-center">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">E-mail</font>
                                                </font>
                                            </th>
                                            <th class="px-2 py-3 text-center">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">rôle</font>
                                                </font>
                                            </th>
                                            <th class="px-2 py-3 text-center">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Pays</font>
                                                </font>
                                            </th>
                                            <th class="px-2 py-3 text-center">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Ajouter du temps</font>
                                                </font>
                                            </th>
                                            <th class="px-2 py-3 text-center">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">procédures</font>
                                                </font>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                        @forelse ($users as $user)
                                            <tr
                                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-200 hover:bg-gray-100 hover:dark:bg-gray-700">
                                                <td class="px-2 py-3 text-center text-xx">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                           {{$user->id}}
                                                        </font>
                                                    </font>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <div class="flex items-center text-sm">
                                                        <!-- Avatar with inset shadow -->
                                                        <div
                                                            class="relative hidden w-10 h-10 rounded-full ltr:mr-3 rtl:ml-3 md:block">
                                                            <img class="object-cover w-full h-full rounded-full"
                                                                src=" {{$user->profile_photo_url}}"
                                                                alt="...">
                                                            <div
                                                                class="absolute bottom-0 w-2 h-2 bg-green-500 rounded-full ltr:left-0 rtl:right-0 ltr:ml-1 rtl:mr-1">
                                                            </div>
                                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                                aria-hidden="true"></div>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        {{$user->name}}
                                                                    </font>
                                                                </font>
                                                            </span>
                                                            <span
                                                                class="block text-xs text-gray-600 lowercase dark:text-gray-400">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        {{$user->username}}
                                                                    </font>
                                                                </font>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-3 text-sm text-center lowercase">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            {{$user->email}}
                                                        </font>
                                                    </font>
                                                </td>
                                                <td class="px-2 py-3 text-xs text-center">
                                                    <span
                                                        class="px-2 py-1 font-semibold leading-tight rounded-full {{$user->role->color}}">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                {{$user->role->name}}
                                                            </font>
                                                        </font>
                                                    </span>
                                                </td>
                                                <td class="px-2 py-3 text-sm text-center">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            {{$user->country->name}}
                                                        </font>
                                                    </font>
                                                </td>
                                                <td class="px-2 py-3 text-sm text-center">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            {{$user->created_at->diffForHumans()}}
                                                        </font>
                                                    </font>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <div
                                                        class="flex items-center justify-between gap-1 text-sm text-center">

                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop px-2"
                                                            wire:click="selectedItem('update',1)">
                                                            <svg class="w-5 h-5" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </button>



                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop px-2"
                                                            wire:click="selectedItem('show',1)">
                                                            <svg class="w-5 h-5" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z">
                                                                </path>
                                                            </svg>
                                                        </button>


                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop px-2"
                                                            wire:click="selectedItem('delete',1)">
                                                            <svg class="w-5 h-5" aria-hidden="true"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>



                                                    </div>
                                                </td>
                                            </tr>
                                        @empty

                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                            <div class="px-4 py-3 border-t dark:border-gray-700">
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:id="Yvo68RZijbuiVrqzXaGJ">
                <div x-data="{
                    show: window.Livewire.find('Yvo68RZijbuiVrqzXaGJ').entangle('showCreateModel').defer,
                    focusables() {
                        // All focusable element types...
                        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

                        return [...$el.querySelectorAll(selector)]
                            // All non-disabled elements...
                            .filter(el => !el.hasAttribute('disabled'))
                    },
                    firstFocusable() { return this.focusables()[0] },
                    lastFocusable() { return this.focusables().slice(-1)[0] },
                    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
                    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
                    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
                    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
                }" x-init="$watch('show', value => {
                    if (value) {
                        document.body.classList.add('overflow-y-hidden');

                    } else {
                        document.body.classList.remove('overflow-y-hidden');
                    }
                })" x-on:close.stop="show = false"
                    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
                    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
                    id="528d2b1611ebfa6e3a9f17d531535402"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                    style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        style="display: none;">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="mb-6 bg-white  dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        style="display: none;">
                        <div class="text-lg bg-primary-600 p-4 text-white" style="background-color:red">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Ajouter un membre
                                </font>
                            </font>
                        </div>
                        <div class="px-6 py-4">
                            <div class="mt-4">
                                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

                                    <div class="col-span-1 md:col-span-2 lg:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="name">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Le nom
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="name" id="name" type="text">
                                    </div>

                                    <div
                                        class="col-span-2 md:col-span-4 lg:col-span-2 lg:row-span-2 order-last lg:order-none">
                                        <div class="flex flex-row items-center justify-center">
                                            <div class="relative mt-4">
                                                <div class="w-24 h-24 bg-gray-200 dark:bg-gray-700 rounded-full">
                                                </div>
                                                <span
                                                    class="absolute bottom-0 left-0 w-8 h-8 p-2 rounded-full bg-primary-600 shadow-md">
                                                    <label>
                                                        <svg wire:target="profilePhotoPath"
                                                            wire:loading.class="animate-bounce"
                                                            class="w-4 h-4 text-white"
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                            </path>
                                                            <path
                                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z">
                                                            </path>
                                                        </svg>
                                                        <input wire:model="profilePhotoPath" type="file"
                                                            accept="image/png, image/jpeg" class="hidden opacity-0">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="username">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Nom d'utilisateur
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="username" type="text">
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="email">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    E-mail
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="email" type="text">
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    nation
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="countryId" wire:key="countryCreate">
                                            <option value="" readonly="true" hidden="true" selected="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Choisissez le pays</font>
                                                </font>
                                            </option>
                                            <option value="1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Arabie Saoudite</font>
                                                </font>
                                            </option>
                                            <option value="2">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Emirats Arabes Unis</font>
                                                </font>
                                            </option>
                                            <option value="3">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Koweit</font>
                                                </font>
                                            </option>
                                            <option value="4">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Qatar</font>
                                                </font>
                                            </option>
                                            <option value="5">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Bahreïn</font>
                                                </font>
                                            </option>
                                            <option value="6">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Oman</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    ville
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="cityId" wire:key="cityCreate">
                                            <option value="" readonly="true" hidden="true" selected="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Sélectionnez une ville
                                                    </font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="roleId">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Rôle
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="roleId" wire:key="roleCreate">
                                            <option value="" readonly="true" hidden="true" selected="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Choisissez le rôle</font>
                                                </font>
                                            </option>
                                            <option value="1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Administrateur</font>
                                                </font>
                                            </option>
                                            <option value="2">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Administrateur</font>
                                                </font>
                                            </option>
                                            <option value="3">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Modérateur</font>
                                                </font>
                                            </option>
                                            <option value="4">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Utilisateur</font>
                                                </font>
                                            </option>
                                            <option value="5">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">banni</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="password">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Mot de passe
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="password" type="password">
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="password_confirmation">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Confirmez le mot de passe
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop block mt-1 w-full"
                                            wire:model.defer="password_confirmation" type="password"
                                            required="required" autocomplete="new-password">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-700 text-right">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"
                                wire:click="closeCreateModel" wire:loading.attr="disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Annulation
                                    </font>
                                </font>
                            </button>

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop ltr:ml-3 rtl:mr-3"
                                wire:click="create" wire:loading.attr="disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        sauvegarder
                                    </font>
                                </font>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div wire:id="UJa2vbFkNZtUZjqyc0NW">
                <div x-data="{
                    show: window.Livewire.find('UJa2vbFkNZtUZjqyc0NW').entangle('showUpdateModel').defer,
                    focusables() {
                        // All focusable element types...
                        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

                        return [...$el.querySelectorAll(selector)]
                            // All non-disabled elements...
                            .filter(el => !el.hasAttribute('disabled'))
                    },
                    firstFocusable() { return this.focusables()[0] },
                    lastFocusable() { return this.focusables().slice(-1)[0] },
                    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
                    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
                    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
                    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
                }" x-init="$watch('show', value => {
                    if (value) {
                        document.body.classList.add('overflow-y-hidden');

                    } else {
                        document.body.classList.remove('overflow-y-hidden');
                    }
                })" x-on:close.stop="show = false"
                    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
                    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
                    id="e92fffa0d5eb0b7ea7713bc01716c740"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                    style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        style="display: none;">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="mb-6 bg-white  dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        style="display: none;">
                        <div class="text-lg bg-primary-600 p-4 text-white">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Modifier un membre
                                </font>
                            </font>
                        </div>
                        <div class="px-6 py-4">
                            <div class="mt-4">
                                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

                                    <div class="col-span-1 md:col-span-2 lg:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="name">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Le nom
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="name" type="text">
                                    </div>

                                    <div
                                        class="col-span-2 md:col-span-4 lg:col-span-2 lg:row-span-2 order-last lg:order-none">
                                        <div class="flex flex-row items-center justify-center">
                                            <div class="relative mt-4">
                                                <div class="w-24 h-24 bg-gray-200 dark:bg-gray-700 rounded-full">
                                                </div>
                                                <span
                                                    class="absolute bottom-0 left-0 w-8 h-8 p-2 rounded-full bg-primary-600 shadow-md">
                                                    <label>
                                                        <svg wire:target="profilePhotoPath"
                                                            wire:loading.class="animate-bounce"
                                                            class="w-4 h-4 text-white"
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                            </path>
                                                            <path
                                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z">
                                                            </path>
                                                        </svg>
                                                        <input wire:model="profilePhotoPath" type="file"
                                                            accept="image/png, image/jpeg" class="hidden opacity-0">
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="username">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Nom d'utilisateur
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="username" type="text">
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="email">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    E-mail
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="email" type="text">
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    nation
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="countryId" wire:key="countryUpdate">
                                            <option value="" readonly="true" hidden="true" selected="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Choisissez le pays</font>
                                                </font>
                                            </option>
                                            <option value="1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Arabie Saoudite</font>
                                                </font>
                                            </option>
                                            <option value="2">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Emirats Arabes Unis</font>
                                                </font>
                                            </option>
                                            <option value="3">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Koweit</font>
                                                </font>
                                            </option>
                                            <option value="4">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Qatar</font>
                                                </font>
                                            </option>
                                            <option value="5">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Bahreïn</font>
                                                </font>
                                            </option>
                                            <option value="6">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Oman</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="select">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    ville
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="cityId" wire:key="cityUpdate">
                                            <option value="" readonly="true" hidden="true" selected="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Sélectionnez une ville
                                                    </font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label
                                            class="block font-medium text-sm text-gray-700 dark:text-gray-400 text-xs"
                                            for="roleId">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Rôle
                                                </font>
                                            </font>
                                        </label>
                                        <select
                                            class="form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1"
                                            wire:model="roleId" wire:key="roleUpdate">
                                            <option value="" readonly="true" hidden="true" selected="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Choisissez le rôle</font>
                                                </font>
                                            </option>
                                            <option value="1">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Administrateur</font>
                                                </font>
                                            </option>
                                            <option value="2">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Administrateur</font>
                                                </font>
                                            </option>
                                            <option value="3">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Modérateur</font>
                                                </font>
                                            </option>
                                            <option value="4">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Utilisateur</font>
                                                </font>
                                            </option>
                                            <option value="5">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">banni</font>
                                                </font>
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="password">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Mot de passe
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop mt-1 block w-full"
                                            wire:model.defer="password" type="password">
                                    </div>

                                    <div class="col-span-1 md:col-span-2">
                                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-400"
                                            for="password_confirmation">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Confirmez le mot de passe
                                                </font>
                                            </font>
                                        </label>
                                        <input
                                            class="form-input border text-sm rounded-lg block w-full p-2.5 bg-white dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 dark:placeholder-gray-400 focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop block mt-1 w-full"
                                            wire:model.defer="password_confirmation" type="password"
                                            required="required" autocomplete="new-password">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-700 text-right">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"
                                wire:click="closeUpdateModel" wire:loading.attr="disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Annulation
                                    </font>
                                </font>
                            </button>

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 font-bold text-sm outline-none focus:outline-none ease-linear transition-all duration-150 disabled:opacity-75 disabled:cursor-no-drop ltr:ml-3 rtl:mr-3"
                                wire:click="edit" wire:loading.attr="disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Modification
                                    </font>
                                </font>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div wire:id="8ZfvIHgVG1VynJam13cQ">

            </div>
            <div wire:id="SQlqyd8b1BtmWoMmWB5y">
                <div x-data="{
                    show: window.Livewire.find('SQlqyd8b1BtmWoMmWB5y').entangle('showDeleteModel').defer,
                    focusables() {
                        // All focusable element types...
                        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

                        return [...$el.querySelectorAll(selector)]
                            // All non-disabled elements...
                            .filter(el => !el.hasAttribute('disabled'))
                    },
                    firstFocusable() { return this.focusables()[0] },
                    lastFocusable() { return this.focusables().slice(-1)[0] },
                    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
                    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
                    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
                    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
                }" x-init="$watch('show', value => {
                    if (value) {
                        document.body.classList.add('overflow-y-hidden');

                    } else {
                        document.body.classList.remove('overflow-y-hidden');
                    }
                })" x-on:close.stop="show = false"
                    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
                    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
                    id="076d1b104d88bbbc40c006d758fc5dc0"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                    style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        style="display: none;">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="mb-6 bg-white  dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        style="display: none;">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                </div>

                                <div
                                    class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                    <h3 class="text-lg">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Supprimer un membre
                                            </font>
                                        </font>
                                    </h3>

                                    <div class="mt-2">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Etes-vous sûr que vous voulez supprimer?!
                                            </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-end px-6 py-4 gap-x-4 bg-gray-100 text-right">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"
                                wire:click="closeDeleteModel" wire:loading.attr="disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Annulation
                                    </font>
                                </font>
                            </button>

                            <button type="button"
                                class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition ml-3"
                                wire:click="delete" wire:loading.attr="disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        effacer
                                    </font>
                                </font>
                            </button>
                        </div>
                    </div>
                </div>


                <div x-data="{
                    show: window.Livewire.find('SQlqyd8b1BtmWoMmWB5y').entangle('showRestoreModel').defer,
                    focusables() {
                        // All focusable element types...
                        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

                        return [...$el.querySelectorAll(selector)]
                            // All non-disabled elements...
                            .filter(el => !el.hasAttribute('disabled'))
                    },
                    firstFocusable() { return this.focusables()[0] },
                    lastFocusable() { return this.focusables().slice(-1)[0] },
                    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
                    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
                    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
                    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
                }" x-init="$watch('show', value => {
                    if (value) {
                        document.body.classList.add('overflow-y-hidden');

                    } else {
                        document.body.classList.remove('overflow-y-hidden');
                    }
                })" x-on:close.stop="show = false"
                    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
                    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
                    id="0ffdd2737cb29d3dec29e9f80aaea6df"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                    style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        style="display: none;">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="mb-6 bg-white  dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        style="display: none;">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                </div>

                                <div
                                    class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                    <h3 class="text-lg">
                                        إستعادة عضو
                                    </h3>

                                    <div class="mt-2">
                                        هل أنت متاكد انك تريد الإستعادة ؟!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-end px-6 py-4 gap-x-4 bg-gray-100 text-right">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"
                                wire:click="closeRestoreModel" wire:loading.attr="disabled">
                                إلغاء
                            </button>

                            <button type="button"
                                class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition ml-3"
                                wire:click="restore" wire:loading.attr="disabled">
                                إستعادة
                            </button>
                        </div>
                    </div>
                </div>



                <div x-data="{
                    show: window.Livewire.find('SQlqyd8b1BtmWoMmWB5y').entangle('showForceDeleteModel').defer,
                    focusables() {
                        // All focusable element types...
                        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

                        return [...$el.querySelectorAll(selector)]
                            // All non-disabled elements...
                            .filter(el => !el.hasAttribute('disabled'))
                    },
                    firstFocusable() { return this.focusables()[0] },
                    lastFocusable() { return this.focusables().slice(-1)[0] },
                    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
                    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
                    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
                    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1 },
                }" x-init="$watch('show', value => {
                    if (value) {
                        document.body.classList.add('overflow-y-hidden');

                    } else {
                        document.body.classList.remove('overflow-y-hidden');
                    }
                })" x-on:close.stop="show = false"
                    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
                    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show"
                    id="3a17f03f6076f61a9fa3c4e2f4855768"
                    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                    style="display: none;">
                    <div x-show="show" class="fixed inset-0 transform transition-all"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        style="display: none;">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="show"
                        class="mb-6 bg-white  dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        style="display: none;">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                </div>

                                <div
                                    class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                    <h3 class="text-lg">
                                        حذف عضو
                                    </h3>

                                    <div class="mt-2">
                                        هل أنت متاكد انك تريد حذف العضو بشكل نهائي ؟!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-end px-6 py-4 gap-x-4 bg-gray-100 text-right">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"
                                wire:click="closeForceDeleteModel" wire:loading.attr="disabled">
                                إلغاء
                            </button>

                            <button type="button"
                                class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition ml-3"
                                wire:click="forceDelete" wire:loading.attr="disabled">
                                حذف
                            </button>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!-- Livewire Component wire-end:zPROna7yrW094NFvomz2 -->
    </main>
</div>
</div>
