<?php include_once "header.php" ?>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <label class="breadcrumb"><a href="#"> Pagina 1 </a> | <a href="#"> Pagina 2 </a> | Pagina 3 </label>

                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>

        <div class="clearfix"></div>


    </div>
    <!-- CONTENT -->
    <div class="row">

        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 id="tableTitle">Prediction Summary <small></small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                            <li role="presentation" class=""><a href="#history" onclick="document.getElementById('tableTitle').innerHTML = 'History';" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">History</a>
                            </li>
                            <li role="presentation" class=""><a href="#prediction" onclick="document.getElementById('tableTitle').innerHTML = 'Prediction';" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Prediction</a>
                            </li>
                            <li role="presentation" class="active"><a href="#summary" onclick="document.getElementById('tableTitle').innerHTML = 'Prediction Summary';" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">Summary</a>
                            </li>
                        </ul>
                        <div id="myTabContent2" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="summary" aria-labelledby="home-tab">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Bar Chart Group <small>Sessions</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content2">
                                            <div id="graphx" style="width:100%; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Prediction calculated using: <small>(change fields for new prediction)</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content" style="display: block;">
                                            <br>
                                            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Select metrics: <span class="required">*</span>
                                                    </label>
                                                    <div  class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label name="metric" class="">
                                                                    <input type="checkbox" required="required" class="flat" checked="checked"> CK metrics
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label name="metric" class="">
                                                                    <input type="checkbox" required="required" class="flat"> Process
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label name="metric" class="">
                                                                    <input type="checkbox" required="required" class="flat" checked="checked"> Scattering
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="checkbox">
                                                                <label name="metric" class="">
                                                                    <input type="checkbox" required="required" class="flat"> Metrica 4
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Classifier *</label>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <select id="heard" class="form-control" required="">
                                                            <option value="">Choose..</option>
                                                            <option value="press" selected="">J48</option>
                                                            <option value="net">NaiveBayes</option>
                                                            <option value="mouth">IBk</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" class="btn btn-success" id="newPred" style="visibility: hidden;">New predicton</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="prediction" aria-labelledby="profile-tab">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Predictors</th>
                                            <th>Actual</th>
                                            <th>Predicted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>LOC; LCOM; ...</td>
                                            <td>true</td>
                                            <td>false</td>
                                        </tr>
                                        <tr>
                                            <td>LOC; LCOM; ...</td>
                                            <td>true</td>
                                            <td>true</td>
                                        </tr>
                                        <tr>
                                            <td>LOC; LCOM; ...</td>
                                            <td>false</td>
                                            <td>false</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="history" aria-labelledby="profile-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">Predictions </th>
                                                <th class="column-title">Date </th>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;"><button type="submit" class="btn btn-primary">Compare</button> ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">Run 1</td>
                                                <td class=" ">May 23, 2014 11:47:56 PM </td>
                                            </tr>
                                            <tr class="odd pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">Run 2</td>
                                                <td class=" ">May 23, 2014 11:30:12 PM</td>
                                            </tr>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">Run 3</td>
                                                <td class=" ">May 24, 2014 10:55:33 PM</td>
                                            </tr>
                                            <tr class="odd pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">Run 4</td>
                                                <td class=" ">May 24, 2014 10:52:44 PM</td>
                                            </tr>
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class=" ">Run 5</td>
                                                <td class=" ">May 24, 2014 11:47:56 PM </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- /CONTENT -->
</div>


<!-- /page content -->

<!-- footer content -->
<?php include_once "footer.php" ?>

<!-- iCheck -->
<script src="scripts/icheck.js"></script>
<script src="scripts/parsleyjs/dist/parsley.js"></script>

<script src="scripts/raphael.js"></script>
<script src="scripts/morris.js"></script>
<!-- Parsley -->
<script>
                                var metrics = document.getElementsByName("metric");
                                for (var i = 0; i < metrics.length; i++)
                                    metrics[i].addEventListener("click", function () {
                                        document.getElementById("newPred").style.visibility = "visible";
                                    }, true);
                                $(document).ready(function () {
                                    $.listen('parsley:field:validate', function () {
                                        validateFront();
                                    });
                                    $('#demo-form2 .btn-success').on('click', function () {
                                        $('#demo-form2').parsley().validate();
                                        validateFront();
                                    });
                                    var validateFront = function () {
                                        if (true === $('#demo-form2').parsley().isValid()) {
                                            $('.bs-callout-info').removeClass('hidden');
                                            $('.bs-callout-warning').addClass('hidden');
                                        } else {
                                            $('.bs-callout-info').addClass('hidden');
                                            $('.bs-callout-warning').removeClass('hidden');
                                        }
                                    };
                                    $('#heard').on('change', function () {
                                        document.getElementById("newPred").style.visibility = "visible";
                                    });
                                });
                                try {
                                    hljs.initHighlightingOnLoad();
                                } catch (err) {
                                }
                                $(document).ready(function () {
                                    Morris.Bar({
                                        element: 'graphx',
                                        data: [
                                            {x: 'accuracy', y: 2, z: 3, a: 4, b:6},
                                            {x: 'precision', y: 3, z: 5, a: 6, b:6},
                                            {x: 'recall', y: 4, z: 3, a: 2, b:6},
                                            {x: 'fmeasure', y: 2, z: 4, a: 5, b:6},
                                            {x: 'areaUnderROC', y: 2, z: 4, a: 5, b:6}
                                        ],
                                        xkey: 'x',
                                        ykeys: ['y', 'z', 'a', 'b'],
                                        barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                                        hideHover: 'auto',
                                        labels: ['Y', 'Z', 'A', 'B'],
                                        resize: true,
                                    }).on('click', function (i, row) {
                                        console.log(i, row);
                                    });
                                })
</script>
<!-- /Parsley -->
