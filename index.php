<?php
include 'assets/includes/layouts/config.php';
include 'assets/includes/layouts/header.php';
include 'assets/includes/layouts/sidebar.php';
?>
<title></title>
</head>
<body>
<main>
    <div class="row">
        <div class="col s12 m6 xl3">
            <div class="card red darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 xl3">
            <div class="card green darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 xl3">
            <div class="card yellow darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 xl3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Card Title</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <!--start table design-->
            <div class="table">
                <div class="thead">
                    <div class="tr">
                        <div class="td">name</div>
                        <div class="td">items name</div>
                        <div class="td">items type</div>
                        <div class="td">price</div>
                    </div>
                </div>
                <div class="tbody">
                    <div class="tr">
                        <div class="action">
                            <span data-position="bottom" data-tooltip="delete" class="tooltipped btn-action-delete"><i class="material-icons">delete</i></span>
                            <span data-position="bottom" data-tooltip="edit" class="tooltipped btn-action-edit"><i class="material-icons">edit</i></span>
                        </div>
                        <div class="td">Iphone 5s</div>
                        <div class="td">Phone</div>
                        <div class="td">Smart</div>
                        <div class="td">$50</div>
                    </div>
                    <div class="tr">
                        <div class="action">
                            <span data-position="bottom" data-tooltip="delete" class="tooltipped btn-action-delete"><i class="material-icons">delete</i></span>
                            <span data-position="bottom" data-tooltip="edit" class="tooltipped btn-action-edit"><i class="material-icons">edit</i></span>
                        </div>
                        <div class="td">Samsung Galaxy A9</div>
                        <div class="td">Phonne</div>
                        <div class="td">The Fuck</div>
                        <div class="td">$100</div>
                    </div>
                    <div class="tr">
                        <div class="action">
                            <span data-position="bottom" data-tooltip="delete" class="tooltipped btn-action-delete"><i class="material-icons">delete</i></span>
                            <span data-position="bottom" data-tooltip="edit" class="tooltipped btn-action-edit"><i class="material-icons">edit</i></span>
                        </div>
                        <div class="td">Mi</div>
                        <div class="td">Phone</div>
                        <div class="td">Fuck</div>
                        <div class="td">$80</div>
                    </div>
                </div>
            </div>
            <!--end table design-->
            <table class="table-custom">
                <thead>
                <tr>
                    <th width="100">
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in"/>
                                <span>Filled in</span>
                            </label>
                        </p>
                    </th>
                    <th>Name</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                </tr>
                </thead>

                <tbody>
                <div class="box-row">
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" class="filled-in" checked="checked"/>
                                <span></span>
                            </label>
                        </td>
                        <td>Alvin</td>
                        <td></td>
                        <td>
                            $0.87
                        </td>
                    </tr>
                </div>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" class="filled-in" checked="checked"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                </tr>
                <tr>
                    <td>
                        <label>
                            <input type="checkbox" class="filled-in" checked="checked"/>
                            <span></span>
                        </label>
                    </td>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="test-slider"></div>
    <form action="#">
        <p class="range-field">
            <input type="range" id="test5" min="0" max="100"/>
        </p>
    </form>
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                    <label for="disabled">Disabled</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    This is an inline input field:
                    <div class="input-field inline">
                        <input id="email_inline" type="email" class="validate">
                        <label for="email_inline">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<?php include 'assets/includes/layouts/footer.php'; ?>
<style>
    .dashboard-background {
        background-color: hsl(0, 0%, 83%) !important;
        color: hsl(0, 0%, 7%) !important;
    }

    .dashboard-text {
        color: #ff0000 !important;
    }
</style>

