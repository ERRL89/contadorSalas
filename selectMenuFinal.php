<div class="container mt-5 text-center fs-5">
        <ul class="list-group">

        <?php
            if($page=="puertas"){
                echo "
                    <a class='list-group-item active' href='./puertas.php'><li class='selectMenu' aria-current='true'>🚪 Puertas 🚪</li></a>
                    <a class='list-group-item selectMenuCustom' href='./ventanas.php'><li class='selectMenu'>🪟 Ventanas 🪟</li></a>
                    <a class='list-group-item selectMenuCustom' href='./canceles.php'><li class='selectMenu'>🚿 Canceles 🚿</li></a>
                     ";
            }

            else if($page=="ventanas"){
                echo "
                    <a class='list-group-item selectMenuCustom' href='./puertas.php'><li class='selectMenu'>🚪 Puertas 🚪</li></a>
                    <a class='list-group-item active' href='./ventanas.php'><li class='selectMenu' aria-current='true'>🪟 Ventanas 🪟</li></a>
                    <a class='list-group-item selectMenuCustom' href='./canceles.php'><li class='selectMenu'>🚿 Canceles 🚿</li></a>
                     ";
            }

            else if($page=="canceles"){
                echo "
                    <a class='list-group-item selectMenuCustom' href='./puertas.php'><li class='selectMenu'>🚪 Puertas 🚪</li></a>
                    <a class='list-group-item selectMenuCustom' href='./ventanas.php'><li class='selectMenu'>🪟 Ventanas 🪟</li></a>
                    <a class='list-group-item active' href='./canceles.php'><li class='selectMenu' aria-current='true'>🚿 Canceles 🚿</li></a>
                     ";
            }
        ?>
           
        </ul>
</div>