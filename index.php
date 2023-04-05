<!-- By dextropol.com | Based on code by @philhoyt and warrendavies.net -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Simple Responsive Drop Down Menu -->
<nav id="primary_nav_wrap" class='main-menu'>
    <ul>
        <!-- Menu Item without dropdown -->
        <li><a href="#">Menu Item</a></li>
        <!-- Menu Item with dropdown -->
        <li>
            <a href="#">Drop Down Item ▾</a>
            <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
            </ul>
        </li>
        <!-- Menu Item 2 without dropdown -->
        <li><a href="#">Menu Item 2</a></li>
        <!-- Menu Item 2 with dropdown -->
        <li>
            <a href="#">Drop Down Item 2 ▾</a>
            <ul>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
                <li><a href="#">Drop Down 6</a></li>
            </ul>
        </li>
    </ul>
</nav>
<input type="checkbox" id="hamburger-input" class="burger-shower"/>
<label id="hamburger-menu" for="hamburger-input">
    <nav id="sidebar-menu">
        <ul>
            <li>
                <a href="#">Responsive Menu Item 1</a>
            </li>
            <li>
                <a href="#">Responsive Menu Item 2</a>
            </li>
            <li>
                <a href="#">Responsive Menu Item 3</a>
            </li>
        </ul>
    </nav>
</label>
<div class="overlay"></div>
<!-- /Simple Responsive Drop Down Menu -->