<?php
require_once("../app/bootstrap.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ticket Manager</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body class="relative bg-yellow-50 overflow-hidden max-h-screen">
  <header class="fixed right-0 top-0 left-60 bg-yellow-50 py-3 px-4 h-16">
    <div class="max-w-4xl mx-auto">
      <div class="flex items-center justify-center">
        <div class="text-lg font-bold">Welecome</div>
      </div>
    </div>
  </header>

  <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
      <div class="flex-grow">
        <div class="px-4 py-6 text-center border-b">
          <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Ticket Manager</span> App</h1>
        </div>
        <div class="p-4">
          <ul class="space-y-1">
            <li>
              <a class="aside-item flex items-center cursor-pointer hover:bg-yellow-50 rounded-xl font-bold text-sm py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>Plan
              </a>
            </li>
            <li>
              <a class="aside-item flex cursor-pointer hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>Ticket list
              </a>
            </li>
              <li>
              <a class="aside-item flex cursor-pointer hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                  <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>Tags
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="p-4">
        <button type="button" class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
            <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
        </button> <span class="font-bold text-sm ml-2">Logout</span>
      </div>
    </div>
  </aside> -->

  <main class="ml-60 pt-16 max-h-screen overflow-auto">
      <!-- plan -->
    <div class="plan px-6 py-8">
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-3xl p-8 mb-5">
          <h1 class="text-3xl font-bold mb-10">Messaging ID framework development for the marketing branch</h1>
          <div class="flex items-center justify-between">
            <div class="flex items-stretch">
              <div class="text-gray-400 text-xs">Members<br>connected</div>
              <div class="h-100 border-l mx-4"></div>
              <div class="flex flex-nowrap -space-x-3">
                <div class="h-9 w-9">
                  <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">
                </div>
                <div class="h-9 w-9">
                  <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">
                </div>
              </div>
            </div>
            <div class="flex items-center gap-x-2">
              <button type="button" class="inline-flex items-center justify-center h-9 px-3 rounded-xl border hover:border-gray-400 text-gray-800 hover:text-gray-900 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                  <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                </svg>
              </button>
              <button type="button" class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                Open
              </button>
            </div>
          </div>

          <hr class="my-10">

          <div class="grid grid-cols-2 gap-x-20">
            <div>
              <h2 class="text-2xl font-bold mb-4">Stats</h2>

              <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                  <div class="p-4 bg-green-100 rounded-xl">
                    <div class="font-bold text-xl text-gray-800 leading-none">Good day, <br>Kristin</div>
                    <div class="mt-5">
                      <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                        Start tracking
                      </button>
                    </div>
                  </div>
                </div>
                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">20</div>
                  <div class="mt-2">Tasks finished</div>
                </div>
                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">5,5</div>
                  <div class="mt-2">Tracked hours</div>
                </div>
                <div class="col-span-2">
                  <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                    <div class="font-bold text-xl leading-none">Your daily plan</div>
                    <div class="mt-2">5 of 8 completed</div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-4">Your tasks today</h2>

              <div class="space-y-4">
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <div class="flex justify-between">
                    <div class="text-gray-400 text-xs">Number 10</div>
                    <div class="text-gray-400 text-xs">4h</div>
                  </div>
                  <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Blog and social posts</a>
                  <div class="text-sm text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>Deadline is today
                  </div>
                </div>
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <div class="flex justify-between">
                    <div class="text-gray-400 text-xs">Grace Aroma</div>
                    <div class="text-gray-400 text-xs">7d</div>
                  </div>
                  <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">New campaign review</a>
                  <div class="text-sm text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>New feedback
                  </div>
                </div>
                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                  <div class="flex justify-between">
                    <div class="text-gray-400 text-xs">Petz App</div>
                    <div class="text-gray-400 text-xs">2h</div>
                  </div>
                  <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and browser QA</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- tickets -->
      <div class="ml-10 tickets hidden p-6 overflow-scroll px-0 flex-col">
          <!-- ticket nav -->
          <div class="ticket-nav flex justify-between">
              <!-- button to create the ticket -->
              <button class="create-btn flex justify-around text-gray-900 z-10 border-2 border-black w-56 bg-black-500 hover:bg-[#F7BE38]/90 focus:ring-4 focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center dark:focus:ring-[#F7BE38]/50 mr-2 mb-2" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 24 24" id="create-note" class="icon glyph"><path d="M20.71,3.29a2.91,2.91,0,0,0-2.2-.84,3.25,3.25,0,0,0-2.17,1L9.46,10.29s0,0,0,0a.62.62,0,0,0-.11.17,1,1,0,0,0-.1.18l0,0L8,14.72A1,1,0,0,0,9,16a.9.9,0,0,0,.28,0l4-1.17,0,0,.18-.1a.62.62,0,0,0,.17-.11l0,0,6.87-6.88a3.25,3.25,0,0,0,1-2.17A2.91,2.91,0,0,0,20.71,3.29Z"/><path d="M20,22H4a2,2,0,0,1-2-2V4A2,2,0,0,1,4,2h8a1,1,0,0,1,0,2H4V20H20V12a1,1,0,0,1,2,0v8A2,2,0,0,1,20,22Z" style="fill:#231f20"/></svg>
                  Create New Ticket
              </button>

              <!-- sort section -->
              <div class="flex">
                  <!-- Sort by creator -->
                  <div class="relative z-10 flex-none p-2 justify-right">
                      <button onclick="showDropdownOptions('options-creator', 'arrow-up-creator', 'arrow-down-creator')" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                          <span class="select-none">Sort by creator</span>

                          <svg id="arrow-down-creator" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                          <svg id="arrow-up-creator" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                      </button>
                      <section id="options-creator" class="hidden absolute w-48 py-2 mt-2 bg-white rounded-lg shadow-xl" multiple="">
                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 1</option>
                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 2</option>
                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 3</option>
                      </section>
                  </div>
                  <!-- Sort by assignment -->
                  <div class="relative z-10 flex-none p-2">
                      <button onclick="showDropdownOptions('options-assignment', 'arrow-up-assignment', 'arrow-down-assignment')" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                          <span class="select-none">Sort by assignment</span>

                          <svg id="arrow-down-assignment" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                          <svg id="arrow-up-assignment" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                      </button>
                      <select id="options-assignment" class="hidden absolute w-48 py-2 mt-2 bg-white rounded-lg shadow-xl" multiple>
                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 1</option>
                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 2</option>
                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 3</option>
                      </select>
                  </div>
              </div>
          </div>
          <!-- tickets list -->
          <table class="mt-4 w-full min-w-max table-auto text-left">
              <thead>
              <tr>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Project <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                      </p>
                  </th>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Assigned <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                      </p>
                  </th>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Priority<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                      </p>
                  </th>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Tag <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                      </p>
                  </th>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Status <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                      </p>
                  </th>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Deadline <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                          </svg>
                      </p>
                  </th>
                  <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                      <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Actions</p>
                  </th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td class="p-4 border-b border-blue-gray-50">
                      <div class="flex items-center gap-3">
                          <div class="flex flex-col">
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">React Project</p>
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">Start date: 10 Dec 2023</p>
                          </div>
                      </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                      <div class="flex items-center gap-3">
                          <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg" alt="John Michael" class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                          <div class="flex flex-col">
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">John Michael</p>
                              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">john@creative-tim.com</p>
                          </div>
                      </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                      <div class="flex flex-col">
                          <h2 class="block antialiased font-sans text-sm leading-normal text-red-900 font-bold">Urgent</h2>
                      </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                      <div class="flex flex-col">
                          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Manager</p>
                          <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">Organization</p>
                      </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                      <div class="w-max">
                          <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-600 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                              <span class="">Completed</span>
                          </div>
                      </div>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                      <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">23/04/18</p>
                  </td>
                  <td class="p-4 border-b border-blue-gray-50">
                      <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
              </svg>
            </span>
                      </button>
                  </td>
              </tr>
              </tbody>
          </table>
      </div>
      <!-- tags -->
      <div class="tags hidden flex">
          tags
      </div>

      <!-- ticket form -->
      <section class="ticket-form hidden py-1 bg-blueGray-50">
          <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                  <div class="rounded-t bg-white mb-0 px-6 py-6">
                      <div class="text-center flex justify-between">
                          <h6 class="text-blueGray-700 text-xl font-bold">
                              New ticket
                          </h6>
                      </div>
                  </div>
                  <hr class="mt-6 border-b-1 border-blueGray-300">
                  <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                      <form>
                          <div class="flex flex-wrap">
                              <div class="w-full lg:w-6/12 px-4">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                      Subject
                                  </label>
                                  <div class="relative w-full mb-3 flex">
                                      <label class="ml-2">
                                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4">
                                      </label>
                                  </div>
                              </div>

                              <div class="w-full lg:w-6/12 px-4 relative">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                      Deadline
                                  </label>
                                  <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                              </div>

                          </div>


                          <div class="flex flex-wrap">
                              <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label for="options-assignment" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                          Assignment
                                      </label>
                                      <div onclick="showDropdownOptions('options-assignment-form', 'arrow-up-assignment-form', 'arrow-down-assignment-form')" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                                          <span class="select-none">Sort by creator</span>

                                          <svg id="arrow-down-assignment-form" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                                          <svg id="arrow-up-assignment-form" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                                      </div>
                                      <section id="options-assignment-form" class="hidden absolute z-10 w-48 py-2 mt-2 bg-white rounded-lg shadow-xl" multiple="">
                                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 1</option>
                                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 2</option>
                                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 3</option>
                                      </section>
                                  </div>
                              </div>
                              <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label for="options-tags" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                          tags
                                      </label>
                                      <div onclick="showDropdownOptions('options-tags-form', 'arrow-up-tags-form', 'arrow-down-tags-form')" class="flex flex-row justify-between w-48 px-2 py-2 text-gray-700 bg-white border-2 border-white rounded-md shadow focus:outline-none focus:border-blue-600">
                                          <span class="select-none">Sort by creator</span>

                                          <svg id="arrow-down-tags-form" class="hidden w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                                          <svg id="arrow-up-tags-form" class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" /></svg>
                                      </div>
                                      <section id="options-tags-form" class="hidden absolute z-10 w-48 py-2 mt-2 bg-white rounded-lg shadow-xl">
                                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 1</option>
                                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 2</option>
                                          <option class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Item 3</option>
                                      </section>

                                  </div>
                              </div>
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                  Priority
                              </label>
                              <div class="flex-col justify-center container mx-auto mt-3">
                                  <div class="grid grid-cols-3 gap-4">
                                      <div>
                                          <input type="radio" id="todo" name="priority" value="Todo" class="form-radio text-blue-500">
                                          <label for="todo" class="ml-2 text-gray-700">Normal</label>
                                      </div>

                                      <div>
                                          <input type="radio" id="doing" name="priority" value="Doing" class="form-radio text-green-500">
                                          <label for="doing" class="ml-2 text-gray-700">Medium</label>
                                      </div>

                                      <div>
                                          <input type="radio" id="done" name="priority" value="Done" class="form-radio text-yellow-500">
                                          <label for="done" class="ml-2 text-gray-700">Urgent</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr class="mt-6 border-b-1 border-blueGray-300">

                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                              Status
                          </label>
                          <div class="flex-col justify-center container mx-auto mt-3">
                              <div class="grid grid-cols-3 gap-3">
                                  <div>
                                      <input type="radio" id="todo" name="status" value="Todo" class="form-radio text-blue-500">
                                      <label for="todo" class="ml-2 text-gray-700">Todo</label>
                                  </div>

                                  <div>
                                      <input type="radio" id="doing" name="status" value="Doing" class="form-radio text-green-500">
                                      <label for="doing" class="ml-2 text-gray-700">Doing</label>
                                  </div>

                                  <div>
                                      <input type="radio" id="done" name="status" value="Done" class="form-radio text-yellow-500">
                                      <label for="done" class="ml-2 text-gray-700">Done</label>
                                  </div>
                              </div>
                          </div>


                          <hr class="mt-6 border-b-1 border-blueGray-300">
                          <div class="flex flex-wrap">
                              <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                          Description
                                      </label>
                                      <label>
                                          <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> A beautiful UI Kit and Admin for JavaScript &amp; Tailwind CSS. It is Freeand Open Source.</textarea>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="flex justify-between">
                              <div class="cancel border-2 border-red-600 rounded-lg px-3 py-2 text-gray-400 w-20 cursor-pointer hover:bg-red-600 hover:text-red-200">
                                  Cancel
                              </div>
                              <button class="border-2 border-yellow-600 rounded-lg px-3 py-2 text-yellow-400 cursor-pointer hover:bg-yellow-600 hover:text-yellow-200">
                                  Save changes
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
  </main>

    <script src="script/main.js"></script>
  <script src="../path/to/flowbite/dist/datepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
</body>
<!-- partial -->

</body>
</html>
