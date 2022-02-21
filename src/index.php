<?php
include "header.php"; 
include "sidebar.php";
?>

<div id="playerinformation">
  <div>
    <!-- first -->
    <h1>
      Player Information
    </h1>
    <p>
      <ul class="list-none">
        <li><strong>ID: </strong>10101</li>
        <li><strong>Name: </strong>Juan Ramón Mateo</li>
        <li><strong>Joined: </strong>2019-11-08</li>
        <li><strong>Email: </strong>probably.unwise@protonmail.ch</li>
        <li><strong>Last Login: </strong>2021-10-14 18:13:29 (seconds ago)</li>
      </ul>
    </p>
  </div>
  <div>
    <!-- second -->
    <h1>
      Family Heraldry
    </h1>
    <p>
      <img src="parts/img/keswick.svg" alt="Heraldry">
      <button class="bg-slate-800 shadow-slate-800/50">Change Heraldry</button>
    </p>
  </div>
  <div>
    <!-- third -->
    <h1>
      Awesome Buttons to Click
    </h1>
    <p>
      <button class="bg-green-500 shadow-green-800/50 shadow-lg">Social Contract</button>
      <button class="bg-gray-800 shadow-gray-800/50 shadow-lg">Recruit A Friend</button>
      <button class="bg-yellow-500 shadow-yellow-800/50 shadow-lg">Make A Donation</button>
      <button class="bg-cyan-500 shadow-cyan-500/50 shadow-lg">Follow Us On Twitter</button>
    </p>
  </div>
  <div>
    <!-- fifth -->
    <h1>
      Non-existant Discord Widget
    </h1>
    <p>
      There's nothing to see here.
      <!-- there should be SOMETHING to see here -->
    </p>
  </div>
</div>

<div class="flex flex-col justify-center items-center my-8">
  <!-- family name and info -->
  <h1 class="lg:text-5xl font-bold">The Keswick Family</h1>
  <p class="text-center">Home Region: Via on Dwilight ♦ Fame: 15 ♦ Wealth: 4655 gold<br />
    7 / 10 characters ~ 5 / 7 active ~ 4 / 4 active nobles
  </p>
</div>

<div id="characterinformation">
  <!-- grid of character cards -->
  <div class="charactercard">
    <div class="activecharactercard">
      <!-- active character -->
      <h1>Leander</h1>
      <h6>Warrior/Infiltrator</h6>
      <p>Dwilight ~ Tol Goldora</p>
      <p class="font-bold">7 hours</p>
      <p class="italic lg:mb-8">travelling</p>
      <div class="cardbuttons">
        <button class="bg-amber-400 py-4">Quickplay</button>
        <button class="bg-amber-400 py-4">Play</button>
      </div>
      <p class="my-1 text-xs italic underline">
        <a href="#">Pause</a>
      </p>
    </div>
  </div>

  <div class="charactercard">
    <div class="activecharactercarddark">
      <!-- active character -->
      <h1>Eurwen</h1>
      <h6>Courtier</h6>
      <p>Colonies ~ Outer Tilog</p>
      <p class="font-bold">12 hours</p>
      <p class="italic lg:mb-8">ok</p>
      <div class="cardbuttons">
        <button class="bg-amber-400 py-4">Quickplay</button>
        <button class="bg-amber-400 py-4">Play</button>
      </div>
      <p class="my-1 text-xs italic underline">
        <a href="#">Pause</a>
      </p>
    </div>
  </div>

  <div class="charactercard">
    <div class="pausedcharactercard">
      <!-- paused character -->
      <h1>Armin</h1>
      <h6>Adventurer</h6>
      <p>East Continent ~ Yssrgard</p>
      <p class="font-bold">&nbsp;</p>
      <p class="italic mb-8">&nbsp;</p>
      <p class="my-1 text-xs italic underline">
        <a href="#">Unpause</a>
      </p>
    </div>
  </div>

  <div class="charactercard">
    <div class="pausedcharactercarddark">
      <!-- paused character -->
      <h1 class="top">Dinah</h1>
      <h6>Adventurer</h6>
      <p>Beluaterra ~ Irondale</p>
      <p class="font-bold">&nbsp;</p>
      <p class="italic mb-8">&nbsp;</p>
      <p class="my-1 text-xs italic underline">
        <a href="#">Unpause</a>
      </p>
    </div>
  </div>
</div>


<?php include "footer.php"; ?>