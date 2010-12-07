<script type="text/javascript" >
Ext.onReady(function(){
    app.init();
});

var app = {
    init: function(){
        var grid = new Ext.ux.grid.TableGrid("listagem", {
            stripeRows: true
        });
        grid.render();
        
        app.createDatePicker("semestre_data_inicio_day", "semestre_data_inicio_month", "semestre_data_inicio_year");
        app.createDatePicker("semestre_data_proposta_day", "semestre_data_proposta_month", "semestre_data_proposta_year");
        app.createDatePicker("semestre_data_apresentacao_day", "semestre_data_apresentacao_month", "semestre_data_apresentacao_year");
    },
    
    createDatePicker: function(day, month, year){
        var elements = new Object();
        elements[year] = 'Y';
        elements[month] = 'n';
        elements[day] = 'j';

        var opts = {
            formElements: elements
        };

        datePickerController.createDatePicker(opts);    
    }
}


</script>

<?php
include_partial('form', array('form' => $form));
include_partial('list', array('semestres' => $semestres));