<style>
/* Show dropdown menu on hover */
.nav-item.dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 0; /* Removes the gap between nav-item and dropdown */
}

/* Style for hovered or active dropdown item */
.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item.active {
  background-color: #eb0905; /* Red background for hover or active state */
  color: #fff; /* Ensure text is visible */
}


</style>
<!-- Top Navbar -->
<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black" style="padding: 0.5rem 1rem;">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="{{route('home')}}">
      <img src="assets/logo/logo.png" alt="Logo" width="150" style="max-height: 50px;">
    </a>

    <!-- Search Bar -->
    <form class="d-none d-lg-flex mx-auto" style="width: 40%;">
      <select name="category" class="form-select me-2" style="width: 25%;">
        <option value="all">All</option>
      </select>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>

    <!-- User and Cart Icons -->
    <div class="d-flex">
      <a href="profile.html" class="btn btn-link text-light me-3" style="font-size: 1.25rem;">
        <i class="fa fa-user"></i>
      </a>
      <div class="cart-container" style="position: relative; display: inline-block;">
  <span class="cart-label" id="cart-count" style="position: absolute; top: -10px; right: -10px; background-color: #eb0905; color: white; border-radius: 50%; padding: 2px 6px; font-size: 0.8rem; display: none;">
    0
  </span>
  <a href="{{route('frontend.cart')}}" class="btn btn-link text-light" style="font-size: 1.25rem;">
    <i class="fa fa-shopping-cart"></i>
  </a>
</div>



    </div>

    <!-- Toggler for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>


<!-- Secondary Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="nextDayDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Next Day</a>
          <ul class="dropdown-menu" aria-labelledby="nextDayDropdown">
          <li><a class="dropdown-item" href="Next.Day.Delivery.Gaming.PCs.html">Next Day Gaming PCs</a></li>
          <li><a class="dropdown-item" href="Gaming PCs.html">Gaming PC</a></li>
          <li><a class="dropdown-item" href="Next Day Delivery Desktop PCs.html">Next Day Desktop</a></li>
          <li><a class="dropdown-item" href="next day laptop.html">Next Day Laptop</a></li>
          <li><a class="dropdown-item" href="Next day Components.html">Next Day Components</a></li>
          <li><a class="dropdown-item" href="next day storage.html">Next Day Storage</a></li>
          <li><a class="dropdown-item" href="next day peripherals.html">Next Day Peripheral</a></li>
          <li><a class="dropdown-item" href="next day networking.html">Next Day Networking</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="customPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Custom PCs</a>
          <ul class="dropdown-menu" aria-labelledby="customPCDropdown">
          <li><a class="dropdown-item" href="Build your own PCs.html">Build Your Own PC</a></li>
          <li><a class="dropdown-item" href="Gaming PCs.html">Gaming PC</a></li>
          <li><a class="dropdown-item" href="Workstation PCs.html">Workstation PCs</a></li>
          <li><a class="dropdown-item" href="Custom Home office PCs.html">Home/Office PCs</a></li>
          <li><a class="dropdown-item" href="PCs by budget.html">PCs by Budget</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Laptops PCs</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Apple laptops.html">Apple Laptops</a></li>
          <li><a class="dropdown-item" href="Home and office Laptops.html">Home/Office Laptops</a></li>
          <li><a class="dropdown-item" href="Gaming Laptops.html">Gaming Laptops</a></li>
          <li><a class="dropdown-item" href="Laptop Bags and sleeves.html">Laptop Bags and Sleeves</a></li>
          <li><a class="dropdown-item" href="Laptop docks.html">Laptop Docks</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Components</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Cases.html">Cases</a></li>
          <li><a class="dropdown-item" href="motherboards.html">Motherboards</a></li>
          <li><a class="dropdown-item" href="CPU proccessors.html">CPU Processor</a></li>
          <li><a class="dropdown-item" href="Fans & Cooling.html">CPU Processor</a></li>
          <li><a class="dropdown-item" href="Memory.html">Memory</a></li>
          <li><a class="dropdown-item" href="Storage.html">Storage</a></li>
          <li><a class="dropdown-item" href="Graphics Cards.html">Graphics Cards</a></li>
          <li><a class="dropdown-item" href="Power Supplies.html">Power Supplies</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Peripherals</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Mouse and Keyboard.html">Mouse & Keyboards</a></li>
          <li><a class="dropdown-item" href="Headsets microphones and webcams.html">Headsets microphones and webcams</a></li>
          <li><a class="dropdown-item" href="Printing.html">Printing</a></li>
          <li><a class="dropdown-item" href="gaming accessories.html">Gaming Accessories</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Software</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Security Software.html">Security Software</a></li>
          <li><a class="dropdown-item" href="Operating System.html">Operating Systems</a></li>
          <li><a class="dropdown-item" href="Antivirus and Antimalware.html">Antivirus & Antimalware</a></li>
          <li><a class="dropdown-item" href="Office software.html">Office Software</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Networking</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Security Software.html">Security Software</a></li>
          <li><a class="dropdown-item" href="Operating System.html">Operating Systems</a></li>
          <li><a class="dropdown-item" href="Antivirus and Antimalware.html">Antivirus & Antimalware</a></li>
          <li><a class="dropdown-item" href="Office software.html">Office Software</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Software</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Business networking.html">Business Networking</a></li>
          <li><a class="dropdown-item" href="Ubiquiti.html">Ubiquiti</a>
          <li><a class="dropdown-item"href="Routers and Mesh Systems and Switches.html">Routers/Mesh Systems & Switches</a></li>
          <li><a class="dropdown-item"href="Network Modules.html">Network Modules</a>
          <li><a class="dropdown-item" href="Servers & Rack Cabinets.html">Servers & Rack Cabinets</a></li>
          <li><a class="dropdown-item" href="PCI PCI-E Add in Cards.html">PCI/PCI-E Add in Cards</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Brands</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="asus.html">ASUS</a></li>
          <li><a class="dropdown-item" href="Apple.html">Apple</a></li>
          <li><a class="dropdown-item" href="amd.html">AMD</a></li>
          <li><a class="dropdown-item"href="BE QUIET.html">be quiet!</a></li>
          <li><a class="dropdown-item"href="Canon.html">Canon</a></li>
          <li><a class="dropdown-item" href="Corsair.html">Corsair</a></li>
          <li><a class="dropdown-item" href="DeepCool.html">DeepCool</a></li>
          <hr style="color:#eb0905; font-weight:600; font-size:35px">
          <li><a class="dropdown-item"href="Kingston.html">Kingston</a></li>
          <li><a class="dropdown-item"href="HP.html">HP</a></li>
          <li><a class="dropdown-item"href="HPE.html">HPE</a></li>
          <li><a class="dropdown-item"href="Marvo.html">Marvo</a></li>
          <li><a class="dropdown-item" href="piXL.html">piXL</a></li>
          <li><a class="dropdown-item"href="Samsung.html">Samsung</a></li>
          <li><a class="dropdown-item"href="TP-Link.html">TP-Link</a></li>
          <li><a class="dropdown-item"href="Western Digital.html">Western Digital</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="desktopPCDropdown" style="background-color: rgb(0, 0, 255); color:#ffffff"  role="button" data-bs-toggle="dropdown" aria-expanded="false">Local IT Services</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item" href="Computer Repairs & Troubleshooting.html">Computer Repairs & Troubleshooting</a></li>
          <li><a class="dropdown-item" href="Computer Upgrades & Optimisation.html">Computer Upgrades and Optimisation</a></li>
          <li><a class="dropdown-item" href="Computer Setup & Data Transfer.html">Computer Setup & Data Transfer</a></li>
          <li><a class="dropdown-item" href="virus & malware removal.html">Virus & Malware Removal</a></li>
          <li><a class="dropdown-item" href="backup solution.html">Backup Solutions</a></li>
          <li><a class="dropdown-item" href="Data Recovery.html">Data Recovery</a></li>
          <li><a class="dropdown-item" href="Data Recovery.html">Data Destruction</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="background-color: rgb(255, 0, 13); color:white;"  href="#" id="desktopPCDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Business & Public Sector IT</a>
          <ul class="dropdown-menu" aria-labelledby="desktopPCDropdown">
          <li><a class="dropdown-item">IT Procurement Services</a></li>
        <li><a class="dropdown-item">Managed IT Support Services</a></li>
        <li><a class="dropdown-item">Cloud Solutions</a></li>
        <li><a class="dropdown-item">Microsoft 365 Services</a></li>
        <li><a class="dropdown-item">Cyber Security Services</a></li>
        <li><a class="dropdown-item">Data Services</a></li>
        <li><a class="dropdown-item">System App & Dev Support</a></li>
        <li><a class="dropdown-item">Business IT Products</a></li>
        <li><a class="dropdown-item">IT Procurement Services</a></li>
        <li><a class="dropdown-item">IT Equipment Leasing & Finance</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
