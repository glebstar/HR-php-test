function getTemperature()
{
    $.get('/temp', {}, function(data){
        $('#temp').html(data.temp);
    });
}