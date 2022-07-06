<?php
session_start();
// session_destroy();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script> alert('Item Already Added'); 
                window.location.href='index.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Item_Price'],'Quantity'=>$_POST['Quantity']);
                echo "<script> alert('Item Added'); 
                    window.location.href='index.php';
                    </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Item_Price'],'Quantity'=>$_POST['Quantity']);
            echo "<script> alert('Item Added'); 
                window.location.href='index.php';
                </script>";
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        header("location:shoping-cart.php");

        foreach($_SESSION['cart'] as $key =>$value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
            {
                unset($_SESSION['cart'][$key]);
                unset($_SESSION['cart']['cart_total']);
                if(isset($sesison))
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                    alert('Item Removed');
                    </script>";

            }
        }
    }
    if(isset($_POST['Make_Purchase']))
    {
        if(isset($_SESSION['cart']))
        {
            header("location:checkout.php");
        }
        else
        {
            echo "<script>
                alert('Cart is empty');
                window.location.href='shoping-cart.php';
                </script>";

        }

    }
}
?>
