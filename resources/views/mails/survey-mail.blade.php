<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Survay</title>
    <style>
        * {
            font-size: 16px;
        }

        .primary-color {
            color: #113f84;
        }

        .text-left {
            text-align: left !important;
        }

        .d-inline-block {
            display: inline-block;
        }

        .font-600 {
            font-weight: 600;
        }

        .w-100 {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .main-container {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .logo {
            width: 100%;
        }

        .text-area-from {
            width: 100%;

            border: 3px solid rgba(70, 0, 0, 0.56) -3px 4px 28px 6px;

        }

        .heading {
            text-align: center;
        }

        .form-values {
            text-align: center;
        }

        .word-wrap {
            white-space: pre-wrap;
        }

        @page {
            size: A4;
            margin: 10px;
        }

        .shrink-content {
            transform: scale(0.9);
            transform-origin: top center;
        }
    </style>
</head>

<body>
    <main>
        <div class="main-container">
            <section class="headers">


                <table class="w-100 text-center">
                    <tr>
                        <td>
                            <div class="logo text-center">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="" width="300px">
                            </div>
                        </td>
                        <td>
                            <div>
                                <div class="form-group">
                                    <label for=""
                                        class="text-left w-100 d-inline-block primary-color font-600 ">Ihr persönlicher
                                        Berater</label>
                                    <div class="ora-style">
                                        <textarea name="" id="" class="text-area-from" cols="1" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </section>
            <section class="heading">
                <h1 class="primary-color">SICHERHEITSGARANTIE</h1>
                <p>Mit diesem Auftragsmandat erhält die VVM Verwaltungs- und Versicherungsmakler GmbH das Recht, eine
                    <strong>einmalige</strong>
                    Beitragsreduzierung in Ihrer privaten Krankenversicherung zu verhandeln.
                </p>
                <p>Unsere Dienstleistung bleibt für Sie kostenlos, wenn Sie unsere angebotenen Einsparmöglichkeiten,
                    unabhängig vom Grund, nicht in
                    Anspruch nehmen möchten. Unser Vergütungsanspruch bleibt 36 Monate nach Erhalt des Angebots
                    bestehen.</p>
                <p>Wenn Sie unsere ermittelten Einsparmöglichkeiten nutzen, berechnen wir Ihnen die
                    Jahresbruttoersparnis (Differenz zwischen dem
                    alten und neuen Monatsbeitrag, multipliziert mit 12). Unser Erfolgshonorar wird nur bei
                    schriftlicher Akzeptanz des Angebots inner-
                    halb von 7 Tagen fällig. Zusätzlich gewähren wir Ihnen ein Skonto von 5%, wenn die Zahlung innerhalb
                    von 3 Tagen erfolgt</p>
                <p>Die VVM- Verwaltungs und Versicherungsmakler GmbH verpflichtet sich, das bestmögliche Angebot für
                    mich zu ermitteln.
                    Ich habe die Datenschutzbestimmungen und die Widerrufsbelehrung auf
                    {{-- <a href="mailto:www.kvdoc.com">www.kvdoc.com</a>  --}}
                    zur Kenntnis
                    genommen.</p>
            </section>
            <section class="form-values">
                <table class="w-100 text-center">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="">Name: </label>
                                <strong>{{ $data['first_name'] . ' ' . $data['last_name'] }}</strong>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <label for="">Beruf: </label>
                            <strong>{{ $data['employee_status'] ?? '' }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Straße, Hausnummer: </label>
                            <strong>{{ $data['address'] }}</strong>
                        </td>
                        <td></td>
                        <td>
                            <label for="">Krankenkasse: </label>
                            <strong>{{ $data['insurance_company'] ?? '' }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">PLZ / Ort:</label>
                            <strong>{{ $data['zip'] . '/' . $data['city'] ?? '' }}</strong>
                        </td>
                        <td></td>
                        <td>
                            <label for="">Tarife: </label>
                            <strong>{{ $data['tarrif_insured'] ?? '' }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Geburtsdatum: </label>
                            <strong>{{ isset($data['born']) ? \Carbon\Carbon::parse($data['born'])->format('d M Y') : '' }}</strong>
                        </td>
                        <td></td>
                        <td>
                            <label for="">Versicherungsnummer: </label>
                            <strong>{{ $data['insurance_number'] ?? '' }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Verdienen: </label>
                            <strong>{{ $data['earning'] }}</strong>
                        </td>
                        <td></td>
                        <td>
                            <label for="">E-Mail: </label>
                            <strong>{{ $data['email'] }}</strong>
                        </td>
                    </tr>
                </table>
            </section>
            <section class="text-center">
                <p>Hiermit ermächtige ich die VVM Verwaltungs- und Versicherungsmakler GmbH, Über den Steinen 10A,
                    06449 Aschersleben, zur Einholung von Tarifberechnungen gemäß §204 VVG.</p>
                <p>Die VVM Verwaltungs- und Versicherungsmakler GmbH ist nicht befugt, vertragliche Erklärungen
                    abzugeben
                    in meinem Namen.</p>
            </section>

            <section class="signature text-center">
                <h1 class="primary-color">Sollte ich das Angebot nicht annehmen, entstehen mir keine Kosten!</h1>
                <table class="w-100 text-center">
                    <tr>
                        <td><strong>{{ \Carbon\Carbon::now() }}</strong>
                            <p>Datum Ort:</p>
                        </td>
                        <td><strong>{{ $data['signature'] }}</strong>
                            <p>Unterschrift</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-center" style="width: 100px; word-break: wrap;">
                                VVM Verwaltungs- und Versicherungsmakler GmbH
                                Über den Steinen
                                10A
                                06449 Aschersleben</p>
                        </td>
                        <td class="text-center" class="word-wrap" class="word-wrap">
                            <span>Fax: +4922197590559</span>
                            {{-- <span>E-Mail: info@kvdoc.com</span>
                            <span>www.kvdoc.com</span> --}}
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </main>
</body>

</html>
