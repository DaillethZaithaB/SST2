//select
function select_usuario(){
var id= $(".select_usuario").val();
alert("Hola seño="+ id);
}//aca ya entra hay que buscar

$(document).ready(() => {
				// SideNav Button Initialization
				$(".button-collapse").sideNav();
					// SideNav Scrollbar Initialization
					var sideNavScrollbar = document.querySelector('.custom-scrollbar');
					var ps = new PerfectScrollbar(sideNavScrollbar);

  new WOW().init();
});

  $(document).ready(() => {
				// SideNav Button Initialization
				$(".button-collapse").sideNav();
					// SideNav Scrollbar Initialization
					var sideNavScrollbar = document.querySelector('.custom-scrollbar');
					var ps = new PerfectScrollbar(sideNavScrollbar);

  new WOW().init();
});
	// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});



         function ConfimoDelete(){

                    var respuesta=confirm("¿Desea eliminar este Administrador?");
                        if (respuesta == true) {
                        return true;
                        }
                        else{
                        

                    return false;
                }
    }