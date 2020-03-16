function getTemperature()
{
    $.post('/weather', {_token: csrf_token}, function(data){
        $('#temp').html(data.temp);
    });
}