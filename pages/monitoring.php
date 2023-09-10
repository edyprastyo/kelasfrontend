<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="row align-items-md-stretch mb-4">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <div class="m-3 text-center">
                    <h2>Monitor Kelembaban</h2>
                </div>
                <!-- <button class="btn btn-outline-light" type="button">Example button</button> -->
                <div id="chart-humidity" class="container mt-5 "></div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="row align-items-mdstretch mb-2">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <div class="mt-1 text-center mb-4">
                        <h2>Status Kelembaban</h2>
                    </div>
                    <div class="container top-50">
                        <div class="alert alert-success" role="alert">
                            Status Kelembaban AMAN.. Keep Enjoy..!!!
                        </div>
                        <div class="alert alert-danger" style="display: none;" role="alert">
                            terlalu kering, Segera siram...!!!
                        </div>
                    </div>
                    <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
                </div>
            </div>
            <div class="row align-items-mdstretch mt-2">
                <div class="h-100 p-5 text-bg-dark border rounded-3">
                    <div class="mt-1 text-center mb-4">
                        <h2>Status Pertumbuhan Kangkung</h2>
                    </div>
                    <div class="container top-50">
                        <div class="alert alert-success" style="display:none;" role="alert">
                            Status Kangkung Siap Di Panen....
                        </div>
                        <div class="alert alert-black border-light " role="alert">
                            Masih Belum Siap di panen Harap bersabar...!!
                        </div>
                    </div>
                    <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
                </div>
            </div>
        </div>
    </div>
    <script>
        var chartH = new Highcharts.Chart({
            chart: {
                renderTo: 'chart-humidity'
            },
            title: {
                text: ''
            },
            series: [{
                showInLegend: false,
                data: []
            }],
            plotOptions: {
                line: {
                    animation: false,
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: {
                    second: '%H:%M:%S'
                }
            },
            yAxis: {
                title: {
                    text: 'Humidity (%)'
                }
            },
            credits: {
                enabled: false
            }
        });
        setInterval(function() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var x = (new Date()).getTime(),
                        y = parseFloat(this.responseText);
                    //console.log(this.responseText);
                    if (chartH.series[0].data.length > 40) {
                        chartH.series[0].addPoint([x, y], true, true, true);
                    } else {
                        chartH.series[0].addPoint([x, y], true, false, true);
                    }
                }
            };
            xhttp.open("GET", "/humidity", true);
            xhttp.send();
        }, 30000);
    </script>
</div>