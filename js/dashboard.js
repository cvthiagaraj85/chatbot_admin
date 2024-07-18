$(document).ready(function() {
    //$('#loginform').submit(function(e) {
        //e.preventDefault();


    var multipleCancelButton = new Choices('#vertical', {
        removeItemButton: true,
        //maxItemCount:5,
        //searchResultLimit:5,
        //renderChoiceLimit:5
      }); 

    $("#select_year").val('2024');



    let dateDropdown = document.getElementById('select_year');
 
    let currentYear = new Date().getFullYear();
    let earliestYear = 1970;
 
    while (currentYear >= earliestYear) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear;
      dateOption.value = currentYear;
      dateDropdown.add(dateOption);
      currentYear -= 1;
    }
    var YearSel = $("#select_year").val();


// Vertical
$("#vertical").on('change', function() {
//     $("#vertical :selected").map(function(i, el) {
//     alert($(el).val()) ;
// }).get();

    var select_button_text = $('#vertical option:selected')
                .toArray().map(item => item.text).join();
               // alert(select_button_text);
    var YearSel = $("#select_year").val();
    var f_date=$("#from_date").val();
    var t_date=$("#to_date").val();
     commonSelect(YearSel,select_button_text,f_date,t_date)
});


    commonSelect(YearSel)
    
     //});
// Year
        $("#select_year").on('change', function() {

            var YearSel=$(this).val();
            var select_button_text = $('#vertical option:selected')
                .toArray().map(item => item.text).join();
            var f_date=$("#from_date").val();
            var t_date=$("#to_date").val();
            commonSelect(YearSel,select_button_text,f_date,t_date)
        });

        $("#from_date, #to_date").on('change', function() {

            var f_date=$("#from_date").val();
            var t_date=$("#to_date").val();
            var select_year=$("#select_year").val();
           var select_button_text = $('#vertical option:selected')
                .toArray().map(item => item.text).join();
            if(f_date && t_date)
            {
                commonSelect(select_year,select_button_text,f_date,t_date)
                $("#error_code").html('');
            }
            else
            {
                $("#error_code").html('Must select From date and to date');
                return false;
            }
            
        });
        // $("#to_date").on('change', function() {

        //     var f_date=$(this).val();
        //     alert(f_date)
        // });


});

function commonSelect(YearSel,select_button_text,f_date,t_date)
{       
    var vertical = '';
        var year = '';
        var f_date = '';
        var t_date = '';
        if(YearSel){
            year = YearSel;
        }else{
            year = $("#select_year").val();
        }
        if(select_button_text){
            vertical = select_button_text;
        }
        if(f_date){
            f_date = f_date;
        }else{
            f_date = $("#from_date").val();
        }
        if(t_date){
            t_date = t_date;
        }else{
            t_date = $("#to_date").val();
        }

        $.ajax({
            type: "POST",
            url: 'ajaxcall.php',
            data: { action: 'allusersmonthwise', year: YearSel, vertical:vertical, from_date:f_date, to_date:t_date  },
            success: function(response)
            {
                //console.log('response',response);
                var jsonData = JSON.parse(response);
                existing_client_fn(jsonData)
           }
       });
}


    function existing_client_fn(json)
    {
        $("#container").html('');
        console.log('json', json)
      
        anychart.onDocumentReady(function () {
      // create data set on our data

       var arr = [];
       var arr1 = [];
       var arr2 = [];

        $.each(json, function(key, val){
            arr.push([['"'+val.month_name+'"']+','+[val.Count]]);
            arr1.push([val.month_name]);
            arr2.push([val.Count]);
       
    });
    

      var chartData = {
        title: '',
        header: ['#', 'Exist Client', 'New Client', 'Job Seeker'],
        rows : [
            [arr1[0].toString(),arr2[0], arr2[12], arr2[24]],
            [arr1[1].toString(),arr2[1], arr2[13], arr2[25]],
            [arr1[2].toString(),arr2[2], arr2[14], arr2[26]],
            [arr1[3].toString(),arr2[3], arr2[15], arr2[27]],
            [arr1[4].toString(),arr2[4], arr2[16], arr2[28]],
            [arr1[5].toString(),arr2[5], arr2[17], arr2[29]],
            [arr1[6].toString(),arr2[6], arr2[18], arr2[30]],
            [arr1[7].toString(),arr2[7], arr2[19], arr2[31]],
            [arr1[8].toString(),arr2[8], arr2[20], arr2[32]],
            [arr1[9].toString(),arr2[9], arr2[21], arr2[33]],
            [arr1[10].toString(),arr2[10], arr2[22], arr2[34]],
            [arr1[11].toString(),arr2[11], arr2[23], arr2[35]]
            ]
        // rows: [
        //   ['jan', 0, 0, 0],
        //   ['feb', 0, 0, 0],
        //   ['March', 1, 22, 25],
        //   ['Apr', 12, 22, 25],
        //   ['May', 15, 26, 29],
        //   ['Jun', 16, 20, 28],
        //   ['Juy', 18, 19, 22],
        //   ['Aug', 18, 22, 25],
        // ]
      };

      // create column chart
      var chart = anychart.column();

      // set chart data
      chart.data(chartData);

      // turn on chart animation
      chart.animation(true);

      chart.yAxis().labels().format('{%Value}{groupsSeparator: }');

      // set titles for Y-axis
      chart.yAxis().title('Count');

      chart
        .labels()
        .enabled(true)
        .position('center-top')
        .anchor('center-bottom')
        .format('{%Value}{groupsSeparator: }');
      chart.hovered().labels(false);

      // turn on legend and tune it
      chart.legend().enabled(true).fontSize(13).padding([0, 0, 20, 0]);

      // interactivity settings and tooltip position
      chart.interactivity().hoverMode('single');

      chart
        .tooltip()
        .positionMode('point')
        .position('center-top')
        .anchor('center-bottom')
        .offsetX(0)
        .offsetY(5)
        .titleFormat('{%X}')
        .format('{%SeriesName} : {%Value}{groupsSeparator: }');

      // set container id for the chart
      chart.container('container');

      // initiate chart drawing
      chart.draw();

    });
    }
    