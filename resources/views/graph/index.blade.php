@extends('layout.graph')
<style>
#container {
    height:100%;
    width:100%;
    position:absolute;
}
</style>
@section('content')
<figure class="highcharts-figure" style="margin-top:20px">
    <div id="container"></div>
</figure>

<script>

Highcharts.chart('container', {
    chart: {
        //plotBackgroundColor: null,
        //plotBorderWidth: null,
        //plotShadow: false,
        type: 'pie',
        //height: 900,
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    title: {
        text: '旅行事変投票結果',
        style: {
            //color: 'red',
            fontSize:'52px'
        }
    },
    //subtitle: {
    //    text: '皆さんの投票結果'
    //},
    plotOptions: {
        pie: {
            innerSize: 300,
            depth: 50,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    //color: 'red',
                    fontSize:'36px'
                }
            }
        }
    },
    //colors: ['#f85252', '#2ba6f3'],
/*
    series: [{
        name: '旅行先',
        data: [{
            name: 'ハワイ)お嫁さん',
            y: 59.2,
            //sliced: true,
            //selected: true,
            color: '#f85252'
        }, {
            name: 'ヨーロッパ)旦那さん',
            y: 40.8,
            color: '#2ba6f3'
        }]
    }]
*/
    series: [<?php echo json_encode($series); ?>]
});
</script>
@endsection
