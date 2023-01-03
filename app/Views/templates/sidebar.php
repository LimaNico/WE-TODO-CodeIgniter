<?php

function getSidebar(){
    echo "    <div class='col-2'>
            <ul class='list-group'>
                <li class='list-group-item text-primary'><a href='login.php' class='text-decoration-none'>Login</a></li>
                <li class='list-group-item text-primary'><a href='projekte.php' class='text-decoration-none'>Projekte</a></li>
                <li class='list-group-item text-primary'><a href='index.php' class='text-decoration-none'>Aktuelles Projekt</a></li>
                <ul>
                    <li class='list-group-item text-primary'><a href='reiter.php' class='text-decoration-none'>Reiter</a></li>
                    <li class='list-group-item text-primary'><a href='aufgaben.php' class='text-decoration-none'>Aufgaben</a></li>
                    <li class='list-group-item text-primary'><a href='mitglieder.php' class='text-decoration-none'>Mitglieder</a></li>
                </ul>

            </ul>
        </div>";
}