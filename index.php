
<!doctype html>
<html>
<head>
    <title>Demo</title>
    <link rel="stylesheet" type="text/css" href="node_modules/dsmorse-gridster/dist/jquery.gridster.min.css">
    <link rel="stylesheet" type="text/css" href="include/css/demo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="node_modules/dsmorse-gridster/dist/jquery.gridster.min.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>

<h1 style="color:black">Room 1</h1>
<div class="gridster">
    <ul></ul>
</div>

<h1 style="color:black">Room 2</h1>
<div class="gridster" id="gridster2">
    <ul></ul>
</div>

<script type="text/javascript" id="code">
    var gridster;
    var gridster2;

    $(function () {
        gridster = $(".gridster > ul").gridster({
            widget_margins: [5, 5],
            widget_base_dimensions: [100, 55]
        }).data('gridster');

        gridster2 = $("#gridster2 > ul").gridster({
            widget_margins: [5, 5],
            widget_base_dimensions: [100, 55]
        }).data('gridster');

        var htmlDisplay = "<table><tr><td>Name:</td><td>Juno Goh</td></tr>";
        htmlDisplay+= "<tr><td>Temperature:</td><td>25</td></tr>";
        htmlDisplay+= "<tr><td>Humidity:</td><td>20</td></tr>";
        htmlDisplay+= "<tr><td>Poop:</td><td>Y</td></tr></table>";
        var widgets = [
            [htmlDisplay, 3, 2],
            ['<li>1</li>', 3, 2],
            ['<li>2</li>', 3, 2],
            ['<li>3</li>', 3, 2],
            ['<li>4</li>', 3, 2],
            ['<li>5</li>', 3, 2],
            ['<li>6</li>', 3, 2],
            ['<li>7</li>', 3, 2],
            ['<li>8</li>', 3, 2],
            ['<li>9</li>', 3, 2]];

        $.each(widgets, function (i, widget) {
            gridster.add_widget.apply(gridster, widget)
        });

        $.each(widgets, function (i, widget) {
            gridster2.add_widget.apply(gridster2, widget)
        });

    });
</script>
</body>
</html>
