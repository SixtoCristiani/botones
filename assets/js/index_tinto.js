function SoloNumerico(e, obj)
{
  var sKey = -1;
  var bResult = true;
  var bPunto = (obj.value.indexOf(".") != -1);
  var lCantChars = obj.value.length;
  if (window.event)
  {
    sKey = e.keyCode;
  }
  else if (e.which)
  {
    sKey = e.which;
  }
  if (sKey > 10)
  {
    if (((sKey < 48 || sKey > 57) && (sKey != 46 || bPunto)) || (!bPunto &&
      lCantChars > 6 && sKey != 46))
    {
      bResult = false;
    }
  }
  return bResult;
}
function AplicoFormato(oText)
{
  var aDec = oText.value.split('.');
  if(aDec.length > 1) {
    if(aDec[1].length == 1) {
      oText.value = aDec[0] + '.' + aDec[1].split('.')[0] + '0';
    }
    if(aDec[1].length == 0) {
      oText.value = aDec[0] + '.00';
    }
    if(aDec[1].length >= 2) {
      oText.value = aDec[0] + '.' + aDec[1].substr(0,2);
    }
  }
  else
  {
    oText.value = aDec + '.00';
  }
}

/** Para el boton de pago de "tinto for techo 2018", ver tinto.php **/
function updateTotal(){
  var nuevoMontoTotal = document.getElementById("cantidadCubiertos").value*5000;
  document.getElementById("montoTotal").value = nuevoMontoTotal;
  document.getElementById("montoTotal").innerHTML = nuevoMontoTotal;
  document.getElementById("item_ammount_1").value = nuevoMontoTotal;
}

function enviar()
{
	var referenceCode = document.getElementById("referenceCode").value.concat(Date.now());
	var amount = document.getElementById("item_ammount_1").value;

	var apiKey = "1Kxu0c6VkwsZThP8hMyzjOFD70~536715~";
	var value = apiKey.concat(referenceCode, "~", amount, "~ARS");
	var signature = md5(value);

	if (document.getElementById("buyerFullName"))
	{
		if (document.getElementById("buyerFullName").value == "")
		{
			alert ("Ingrese su Nombre y Apellido");
      return false;
		}
	}
	if (document.getElementById("buyerEmail"))
	{
		if (document.getElementById("buyerEmail").value == "")
		{
			alert ("Ingrese su Email");
      return false;
		}
	}
	if (document.getElementById("payerDocument"))
	{
		if (document.getElementById("payerDocument").value == "")
		{
			alert ("Ingrese su DNI o Pasaporte");
      return false;
		} else {
			document.getElementById("extra1").value =  document.getElementById("payerDocument").value;
    }
	}
	if (document.getElementById("item_ammount_1"))
	{
		if (document.getElementById("item_ammount_1").value == "")
		{
			alert ("Ingrese el Monto");
      return false;
		}
	}
  if (document.getElementById("mobilePhone"))
	{
		if (document.getElementById("mobilePhone").value == "")
		{
			alert ("Ingrese su Teléfono");
      return false;
		}
	}
	document.getElementById("amount").value = amount;
	document.getElementById("signature").value = signature;
	document.getElementById("referenceCode").value = referenceCode;
	document.getElementById("description").value = document.getElementById("description").value + " " + document.getElementById("payerDocument").value;

  /* lo que sigue solo funciona para tinto.php, lo mismo que decir "si estoy en tinto, entonces.."  una berretada, si */
	if (document.getElementById('cantidadCubiertos'))
	{
    document.getElementById('payerFullName').value = document.getElementById('buyerFullName').value;
    document.getElementById('payerDocument').value = "";
    document.getElementById("description").value = document.getElementById("description").value + ", " +document.getElementById('cantidadCubiertos').value + " cubiertos." ;
	}

	document.getElementById("formulario").submit();
}
