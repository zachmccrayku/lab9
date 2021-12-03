function Validate()
{
    return (validateShipping() && validateQuantities())
}

function validateShipping()
{
    if(document.forms.form.elements.shipping.value == '')
    {
        alert("You need to select a shipping option.");
        return false;
    }
    else
    {
        return true;
    }
}

function validateQuantities()
{
    if(document.forms.form.elements.numApples >= 0 && document.forms.form.elements.numBananas >= 0 && document.forms.form.elements.numCarrots >= 0)
    {
        return true;
    }
    else
    {
        alert("Please enter an integer number when choosing the quantity");
        return false;
    }
}