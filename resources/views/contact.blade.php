<x-layout>

    {{--    <!----}}
    {{--   This example requires some changes to your config:--}}

    {{--   ```--}}
    {{--   // tailwind.config.js--}}
    {{--   module.exports = {--}}
    {{--     // ...--}}
    {{--     plugins: [--}}
    {{--       // ...--}}
    {{--       require('@tailwindcss/forms'),--}}
    {{--     ],--}}
    {{--   }--}}
    {{--   ```--}}
    {{-- -->--}}
    {{--    <form>--}}
    {{--        <div class="space-y-12">--}}
    {{--            <div class="border-b border-gray-900/10 pb-12">--}}
    {{--                <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>--}}
    {{--                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be--}}
    {{--                    careful what you share.</p>--}}

    {{--                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">--}}
    {{--                    <div class="sm:col-span-4">--}}
    {{--                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <div--}}
    {{--                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">--}}
    {{--                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span>--}}
    {{--                                <input type="text" name="username" id="username" autocomplete="username"--}}
    {{--                                       class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"--}}
    {{--                                       placeholder="janesmith">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-span-full">--}}
    {{--                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <textarea id="about" name="about" rows="3"--}}
    {{--                                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>--}}
    {{--                        </div>--}}
    {{--                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-span-full">--}}
    {{--                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>--}}
    {{--                        <div class="mt-2 flex items-center gap-x-3">--}}
    {{--                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"--}}
    {{--                                 aria-hidden="true">--}}
    {{--                                <path fill-rule="evenodd"--}}
    {{--                                      d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"--}}
    {{--                                      clip-rule="evenodd"/>--}}
    {{--                            </svg>--}}
    {{--                            <button type="button"--}}
    {{--                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">--}}
    {{--                                Change--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-span-full">--}}
    {{--                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover--}}
    {{--                            photo</label>--}}
    {{--                        <div--}}
    {{--                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">--}}
    {{--                            <div class="text-center">--}}
    {{--                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"--}}
    {{--                                     aria-hidden="true">--}}
    {{--                                    <path fill-rule="evenodd"--}}
    {{--                                          d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"--}}
    {{--                                          clip-rule="evenodd"/>--}}
    {{--                                </svg>--}}
    {{--                                <div class="mt-4 flex text-sm leading-6 text-gray-600">--}}
    {{--                                    <label for="file-upload"--}}
    {{--                                           class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">--}}
    {{--                                        <span>Upload a file</span>--}}
    {{--                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">--}}
    {{--                                    </label>--}}
    {{--                                    <p class="pl-1">or drag and drop</p>--}}
    {{--                                </div>--}}
    {{--                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="border-b border-gray-900/10 pb-12">--}}
    {{--                <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>--}}
    {{--                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>--}}

    {{--                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">--}}
    {{--                    <div class="sm:col-span-3">--}}
    {{--                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First--}}
    {{--                            name</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="sm:col-span-3">--}}
    {{--                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last--}}
    {{--                            name</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="sm:col-span-4">--}}
    {{--                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email--}}
    {{--                            address</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input id="email" name="email" type="email" autocomplete="email"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="sm:col-span-3">--}}
    {{--                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <select id="country" name="country" autocomplete="country-name"--}}
    {{--                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">--}}
    {{--                                <option>United States</option>--}}
    {{--                                <option>Canada</option>--}}
    {{--                                <option>Mexico</option>--}}
    {{--                            </select>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-span-full">--}}
    {{--                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street--}}
    {{--                            address</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input type="text" name="street-address" id="street-address" autocomplete="street-address"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="sm:col-span-2 sm:col-start-1">--}}
    {{--                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input type="text" name="city" id="city" autocomplete="address-level2"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="sm:col-span-2">--}}
    {{--                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State /--}}
    {{--                            Province</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input type="text" name="region" id="region" autocomplete="address-level1"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="sm:col-span-2">--}}
    {{--                        <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal--}}
    {{--                            code</label>--}}
    {{--                        <div class="mt-2">--}}
    {{--                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"--}}
    {{--                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="border-b border-gray-900/10 pb-12">--}}
    {{--                <h2 class="text-base font-semibold leading-7 text-gray-900">Notifications</h2>--}}
    {{--                <p class="mt-1 text-sm leading-6 text-gray-600">We'll always let you know about important changes, but--}}
    {{--                    you pick what else you want to hear about.</p>--}}

    {{--                <div class="mt-10 space-y-10">--}}
    {{--                    <fieldset>--}}
    {{--                        <legend class="text-sm font-semibold leading-6 text-gray-900">By Email</legend>--}}
    {{--                        <div class="mt-6 space-y-6">--}}
    {{--                            <div class="relative flex gap-x-3">--}}
    {{--                                <div class="flex h-6 items-center">--}}
    {{--                                    <input id="comments" name="comments" type="checkbox"--}}
    {{--                                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
    {{--                                </div>--}}
    {{--                                <div class="text-sm leading-6">--}}
    {{--                                    <label for="comments" class="font-medium text-gray-900">Comments</label>--}}
    {{--                                    <p class="text-gray-500">Get notified when someones posts a comment on a--}}
    {{--                                        posting.</p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="relative flex gap-x-3">--}}
    {{--                                <div class="flex h-6 items-center">--}}
    {{--                                    <input id="candidates" name="candidates" type="checkbox"--}}
    {{--                                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
    {{--                                </div>--}}
    {{--                                <div class="text-sm leading-6">--}}
    {{--                                    <label for="candidates" class="font-medium text-gray-900">Candidates</label>--}}
    {{--                                    <p class="text-gray-500">Get notified when a candidate applies for a job.</p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="relative flex gap-x-3">--}}
    {{--                                <div class="flex h-6 items-center">--}}
    {{--                                    <input id="offers" name="offers" type="checkbox"--}}
    {{--                                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
    {{--                                </div>--}}
    {{--                                <div class="text-sm leading-6">--}}
    {{--                                    <label for="offers" class="font-medium text-gray-900">Offers</label>--}}
    {{--                                    <p class="text-gray-500">Get notified when a candidate accepts or rejects an--}}
    {{--                                        offer.</p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </fieldset>--}}
    {{--                    <fieldset>--}}
    {{--                        <legend class="text-sm font-semibold leading-6 text-gray-900">Push Notifications</legend>--}}
    {{--                        <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile--}}
    {{--                            phone.</p>--}}
    {{--                        <div class="mt-6 space-y-6">--}}
    {{--                            <div class="flex items-center gap-x-3">--}}
    {{--                                <input id="push-everything" name="push-notifications" type="radio"--}}
    {{--                                       class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
    {{--                                <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Everything</label>--}}
    {{--                            </div>--}}
    {{--                            <div class="flex items-center gap-x-3">--}}
    {{--                                <input id="push-email" name="push-notifications" type="radio"--}}
    {{--                                       class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
    {{--                                <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Same--}}
    {{--                                    as email</label>--}}
    {{--                            </div>--}}
    {{--                            <div class="flex items-center gap-x-3">--}}
    {{--                                <input id="push-nothing" name="push-notifications" type="radio"--}}
    {{--                                       class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
    {{--                                <label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">No--}}
    {{--                                    push notifications</label>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </fieldset>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--        <div class="mt-6 flex items-center justify-end gap-x-6">--}}
    {{--            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>--}}
    {{--            <button type="submit"--}}
    {{--                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">--}}
    {{--                Save--}}
    {{--            </button>--}}
    {{--        </div>--}}
    {{--    </form>--}}
    <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">Contact us</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-500">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            <div class="max-w-5xl mx-auto mt-12 sm:mt-16">
                <div class="grid grid-cols-1 gap-6 px-8 text-center md:px-0 md:grid-cols-3">
                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                            </svg>
                            <p class="mt-6 text-lg font-medium text-gray-900">+1-316-555-0116</p>
                            <p class="mt-1 text-lg font-medium text-gray-900">+1-446-526-0117</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <p class="mt-6 text-lg font-medium text-gray-900">contact@example.com</p>
                            <p class="mt-1 text-lg font-medium text-gray-900">hr@example.com</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-xl">
                        <div class="p-6">
                            <svg class="flex-shrink-0 w-10 h-10 mx-auto text-gray-400"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <p class="mt-6 text-lg font-medium leading-relaxed text-gray-900">8502 Preston Rd. Ingle,
                                Maine
                                98380, USA</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 overflow-hidden bg-white rounded-xl">
                    <div class="px-6 py-12 sm:p-12">
                        <h3 class="text-3xl font-semibold text-center text-gray-900">Send us a message</h3>

                        <form action="#" method="POST" class="mt-14">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                <div>
                                    <label for="" class="text-base font-medium text-gray-900"> Your name </label>
                                    <div class="mt-2.5 relative">
                                        <input type="text" name="" id="" placeholder="Enter your full name"
                                               class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600"/>
                                    </div>
                                </div>

                                <div>
                                    <label for="" class="text-base font-medium text-gray-900"> Email address </label>
                                    <div class="mt-2.5 relative">
                                        <input type="email" name="" id="" placeholder="Enter your full name"
                                               class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600"/>
                                    </div>
                                </div>

                                <div>
                                    <label for="" class="text-base font-medium text-gray-900"> Phone number </label>
                                    <div class="mt-2.5 relative">
                                        <input type="tel" name="" id="" placeholder="Enter your full name"
                                               class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600"/>
                                    </div>
                                </div>

                                <div>
                                    <label for="" class="text-base font-medium text-gray-900"> Company name </label>
                                    <div class="mt-2.5 relative">
                                        <input type="text" name="" id="" placeholder="Enter your full name"
                                               class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600"/>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="" class="text-base font-medium text-gray-900"> Message </label>
                                    <div class="mt-2.5 relative">
                                    <textarea name="" id="" placeholder=""
                                              class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:border-blue-600 caret-blue-600"
                                              rows="4"></textarea>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <button type="submit"
                                            class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
