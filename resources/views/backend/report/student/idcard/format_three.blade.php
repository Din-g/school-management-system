<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Source Sans Pro', serif;
        }

        .row {
            width: 100%;
            overflow: hidden;
        }

        .card {
            border-radius: 10px;
            border: 2px solid #243F60;
            height: 323px;
            width: 204px;
            float: left;
            margin-right: 15px;
            margin-bottom: 30px;
            box-sizing: border-box;
        }

        .light_blue {
            background-color: #D0E2F3;
            border-color: #00206087;
        }

        .bold {
            font-weight: bold
        }

        .header {
            margin-top: 11px;
        }

        .header,
        .content,
        .footer,
        .signature,
        .barcode {
            width: 100%;
            overflow: hidden;
        }

        .title {
            font-weight: bold;
            font-size: 14px;
        }

        .logo {
            height: 48px;
            width: 48px;
            float: left;
            margin-right: 5px;

        }

        .logo img {
            width: 100%;
            height: 100%;
        }

        .logo.hrmdc-logo {
            height: 54px
        }

        .student_pic {
            width: 100%;
            display: block;
            overflow: hidden;
            text-align: center;
            box-sizing: border-box;
        }

        .student_pic img {
            width: 100%;
            max-width: 53px;
            margin: 5px auto;
            box-sizing: border-box;
        }

        .signature {
            text-align: right;
        }

        .signature img {
            height: 28px;
            width: 101px;
            display: block;
        }

        .signature img,
        .signature span {
            float: right;
            margin-right: 5px;
        }

        .barcode img {
            width: 100%;
            background-color: #fff;
        }

        .barcode {
            text-align: center
        }

        table,
        span {
            font-size: 12px
        }

        table {
            padding-left: 5px
        }

        .footer span {
            width: 100%
        }

        .back {
            text-align: center;
        }

        .back h3 {
            padding: 0 15px;
            font-weight: normal
        }

        .back h2,
        .back h3 {
            font-size: 16px;
        }

        .back h2 {
            padding: 0 17px;
            margin-bottom: 6px;
        }

        .back span,
        .back a {
            display: block;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
        }

        .back-logo {
            width: 58px
        }

        .hrmghs {
            font-size: 15px
        }

        .border_blue {
            border: 2px solid #002060
        }

        back span,
        .back a {
            font-size: 14px;
        }

        .txt_full {
            letter-spacing: 14px;
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
            overflow: hidden;
        }


        .hrbc .back h3 {
            font-size: 15px
        }

        .hrbc .barcode {
            bottom: 0;
            position: absolute;
        }

        .hrbc.back span,
        .back a {
            font-size: 14px
        }

        .hrbc.back a,
        .hrbc.back h2 {
            color: #002060
        }

        .hrbc .title {
            background-color: #002060;
            color: #fff;
            font-size: 15px;
            text-align: right;
            width: 100%;
            padding: 5px 0;
            box-sizing: border-box;
            padding-right: 5px;

        }

        .hrbc {
            position: relative
        }

        .hrbc .logo {
            position: absolute;
            z-index: 2;
            top: 0;
            left: 4px
        }

        .id_title {
            display: block;
            overflow: hidden;
            color: #fff;
            text-align: center;
            padding: 3px 45px 3px 12px;
            position: absolute;
            z-index: 2;
            top: 5px;
            right: 0
        }

        .hrbc .txt_full {
            letter-spacing: 13.5px;
            font-weight: normal;
            padding-left: 5px;
        }

        .hrbc .content {
            position: relative;
        }

        .id_bg {
            width: 100%;
            margin-top: 5px;
        }

        .hrbc .student_pic {
            margin-top: -32px;
        }

        .hrbc.back h3 {
            margin-top: 10px;
            margin-bottom: 2px;
        }

        .hrbc.back h2 {
            margin-bottom: 5px;
            margin-top: 5px;
        }
        @media print{
            @page {
                size:  A4 landscape;
                margin-top: 10mm;
                margin-left: 0.10in;
                margin-right: 0;
                margin-bottom: 0;
            }

            * {
                -webkit-print-color-adjust: exact !important;   /* Chrome, Safari */
                color-adjust: exact !important;                 /*Firefox*/
            }
        }
        @media print
        {
            div{
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
<section class="main">
    <div class="row">
        <!-- khalil mir college-->
        <div class="card light_blue hrbc">
            <div class="logo"><img src="data:image/png;base64,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"></div>
            <div class="header">
                <div class="title">H.R. BOY'S COLLEGE</div>
            </div>
            <div class="content">
                <img class="id_bg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAABcCAYAAAAf82z+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo0MzcxOTcwYS1jNGRhLTkxNDUtOWEzZi0xNGY2Y2YzZWJjY2QiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QzJFQTQ4RTExQjFEMTFFOTgxOTNBQkYyNjdCRTVEQ0MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QzJFQTQ4RTAxQjFEMTFFOTgxOTNBQkYyNjdCRTVEQ0MiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjQzNzE5NzBhLWM0ZGEtOTE0NS05YTNmLTE0ZjZjZjNlYmNjZCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0MzcxOTcwYS1jNGRhLTkxNDUtOWEzZi0xNGY2Y2YzZWJjY2QiLz4gPC9y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">
                <span class="id_title">STUDENT ID CARD</span>
                <span class="student_pic">
                        <img class="border_blue" src="data:image/png;base64,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" />
                    </span>
                <table border="0" cellpadding="0" cellspaing="0">
                    <tr>
                        <td class="bold">Name</td>
                        <td class="bold">:</td>
                        <td>Tamanna Akhter</td>
                    </tr>
                    <tr>
                        <td class="bold">Class</td>
                        <td class="bold">:</td>
                        <td>Eight</td>
                    </tr>
                    <tr>
                        <td class="bold">Group</td>
                        <td class="bold">:</td>
                        <td>Humanities</td>
                    </tr>
                    <tr>
                        <td class="bold">Class Roll</td>
                        <td class="bold">:</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td class="bold">Session</td>
                        <td class="bold">:</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td class="bold">Blood Group</td>
                        <td class="bold">:</td>
                        <td>B+</td>
                    </tr>
                    <tr>
                        <td class="bold">House</td>
                        <td class="bold">:</td>
                        <td>Abul Fazal</td>
                    </tr>
                    <tr>
                        <td class="bold">Validity</td>
                        <td class="bold">:</td>
                        <td>July 2019</td>
                    </tr>
                </table>
            </div>
            <div class="footer">
                <div class="signature">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAAhBAMAAAARwClTAAAAMFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABaPxwLAAAAAXRSTlMAQObYZgAAAV5JREFUOMulVFFugzAMNZ1WqRLCaBdYb7DegCtwg/ZIvUGvshvsCrvBDKh/lTzHToGyJVBiIQix34vzHAdgbNkR1ljVuTfWzyORuQQkgCIU8UohD5unidEHsXPkYkRRbP99Box+Oq5zAMwzmzLvm7xyVhvTdPFC5Bp7ZO5iWw5XkbnGIuRdchAowv3o2/0j2N9k71MXwfeuYjSGzHi/xtgX9d9GfB8uCo3RRmw/PKhKfjnmaTI7tngEA2uDDRy2cdv7XqYRp6KQxrkINi95QvIHRQcbx/nzKBMedElyOQiSJGIj4e8OVupeCSpPb5w05G75dgS1IeVpJBncQ6ViUEZQSkTpXHlnCvFQDYJv4DPgFbZC37BKw3xXsb0CnlvTBw94cqi2L54vkiw2te1n4BLQMtOC5l10KUECmBLAONtpEZO2qBKynrsg4mBKyHo9GFPB6ytFKfiUMyLdtDj0F4hoo+2pfCyPAAAAAElFTkSuQmCC" />
                    <span>Authorized Signature</span>
                </div>

            </div>

        </div>
        <div class="card back light_blue hrbc">
            <h3 class="bold">If Found Please Return the Card To</h3>
            <img src="data:image/png;base64,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"
                 class="back-logo" />
            <h2>H.R. BOY'S COLLEGE</h2>
            <span class="address">Dhanmondi-32,<br />Mirpur Road, Dhaka. <br />01000000011</span>
            <a href="#">www.hrbc.edu.bd</a>
            <span>Email: info@hrbc.edu.bd</span>
            <div class="barcode">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWsAAAA1CAYAAACHtcpLAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAMWSURBVHhe7dQxKPxxGMdx/iTDySaJ7ZJSxGCTGCiTQVe2K8NFKTZiYkIGg0FMmMiiLgObTZjYZLAoogzK9uX7/L4//98vdzf71PtVz3XP831+3+7q7lP1zfna2dlx3ubmpvWDg4PWJ3V1ddnZwcFBmJSXzWZtN67l5eVwUt7IyIjtrq+vh0nk+vra5nV1de7t7c1m/f39Ntva2rI+dnFxYfPGxkb3+fkZppF8Pm9nleru7s52c7mc9UtLS9bH7u/vfz1zcnJiZwsLC9ZPTExYX8ns7KztTk5Ohknk4+PDNTQ0pO7f3t4Op+V1d3fb7v7+vvWrq6vWj46OWv/4+Ji6s1SNj4/bblJra6udnZ6ehklkb2/P5j09PWHy38DAQOreQqEQTiLv7++uvr4+tRPX3Nyc7ZydnVnf3NxsvdfZ2ZnaXVxcDCeRh4eHnzP/vpLb29uf3aenpzAt7fLy0vb8Z/afPcl/t/geX/67e6+vr662ttZmNzc3Noutra2lnilVR0dHYTtyfHxs8/b29jBxrq2tzWbFYjFMIv43kLyrpqbGvby8hNPIzMxMaieuTCZjv0Gvr6/PZru7u9bHzs/Pbd7U1BQm5fn/RvJ+X/4/5I2NjVm/srJifSXDw8O2u7GxESaRq6ur1N2+fAZ4U1NT1k9PT1tfSm9v76/nk9XS0hI2nevo6LDZ4eGh9T7Tkrs+88qZn59P7cZVXV3tnp+fbWdoaMhmPoM9n8nJ3X/fLwCAP46wBgABhDUACCCsAUAAYQ0AAghrABBAWAOAAMIaAAQQ1gAggLAGAAGENQAIIKwBQABhDQACCGsAEEBYA4AAwhoABBDWACCAsAYAAYQ1AAggrAFAAGENAAIIawAQQFgDgADCGgAEENYAIICwBgABhDUACCCsAUAAYQ0AAghrABBAWAOAAMIaAAQQ1gAggLAGAAGENQAIIKwBQABhDQACCGsAEEBYA4AAwhoABBDWACCAsAYAAYQ1AAggrAFAAGENAAIIawAQQFgDgADCGgAEENYAIICwBgABhDUACCCsAeDPq6r6AtaNvhRg6D86AAAAAElFTkSuQmCC" />
                <span class="txt_full">19121008</span>
            </div>
        </div>
        <!--end hrbc-->
    </div>
</section>
</body>

</html>