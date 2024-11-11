@extends('layout.master')
@section('content')
    <form class="h-100" id="regForm" action="{{ route('pdfStore') }}" method="POST">
        @csrf
        <div class="h-100 w-100 parent-section tab-container d-flex flex-column justify-content-center align-items-center">
            <section class="tab h-100 w-100 background bg-onboard">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    @if (Session::has('success'))
                        <h1 class="text-success">{{ Session::get('success') }}</h1>
                    @endif
                    <h2 class="font-normal text-white">
                        Beitragsermäßigung für Ihre private Krankenversicherung
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex  justify-content-center gap-2">
                                    <p>
                                        <i class="fa-solid fa-check fs-1" style="color: #00ab8e;"></i>
                                    </p>
                                    <p class="fs-4 text-white">
                                        Bei 90 % aller privaten Krankenversicherungen möglich</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex  justify-content-center gap-2">
                                    <p>
                                        <i class="fa-solid fa-check fs-1" style="color: #00ab8e;"></i>
                                    </p>
                                    <p class="fs-4 text-white">Beitragsreduktion im Alter</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex  justify-content-center gap-2">
                                    <p>
                                        <i class="fa-solid fa-check fs-1" style="color: #00ab8e;"></i>
                                    </p>
                                    <p class="fs-4 text-white">Ohne Wechsel der Krankenkasse
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-1-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Bei welcher privaten Krankenversicherung sind Sie versichert?
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p><input placeholder="Bei welcher privaten Krankenversicherung sind Sie versichert?"
                                        oninput="this.className = ''" name="insurance_company"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-2-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">In welchem ​​Tarif sind Sie versichert?
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="text" placeholder="In welchem ​​Tarif sind Sie versichert?"
                                        oninput="this.className = ''" name="tarrif_insured"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-3-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Wie lautet Ihre Versicherungsnummer?
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="text" placeholder="Versicherungsnummer" oninput="this.className = ''"
                                        name="insurance_number" id="">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-4-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Wann wurdest du geboren?
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="date" placeholder="Wann wurdest du geboren?"
                                        oninput="this.className = ''" name="born" id="dateOfBirth">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-5-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Verdienen
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center text-white">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="earning" id="inlineRadio1"
                                            value="Bis zu 400€">
                                        <label class="form-check-label" for="inlineRadio1">Bis zu 400€
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="earning" id="inlineRadio2"
                                            value="Zwischen 400€ und 1000€">
                                        <label class="form-check-label" for="inlineRadio2">Zwischen 400€ und 1000€</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="earning" id="inlineRadio3"
                                            value="Über 1000€">
                                        <label class="form-check-label" for="inlineRadio3">Über 1000€</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-6-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Wie ist Ihr aktueller beruflicher Status?
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center text-white">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employee_status"
                                            id="employeStatusE" value="Ich bin berufstätig">
                                        <label class="form-check-label" for="employeStatusE">Ich bin berufstätig</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employee_status"
                                            id="employeStatusS" value="Ich bin selbstständig">
                                        <label class="form-check-label" for="employeStatusS">Ich bin selbstständig</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employee_status"
                                            id="employeStatusR" value="Ich bin im Ruhestand">
                                        <label class="form-check-label" for="employeStatusR">Ich bin im Ruhestand</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-5-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">
                        <div class="container">
                            Erledigt Um Ihre Prämie anhand Ihrer Angaben reduzieren zu können, benötigen wir zusätzlich
                            Ihren Wohnort.
                        </div>
                    </h2>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-5-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Ihr Wohnort?</h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="text" placeholder="PLZ" oninput="this.className = ''" name="zip">
                                </p>
                                <p><input type="text" placeholder="Straße, Hausnummer" oninput="this.className = ''"
                                        name="address">
                                </p>
                                <p><input type="text" placeholder="Stadt" oninput="this.className = ''"
                                        name="city">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tab h-100 w-100 background step-6-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">Wie lautet Ihr Vor- und Nachname?
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <p><input type="text" placeholder="Vorname" oninput="this.className = ''"
                                        name="first_name">
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p><input type="text" placeholder="Nachname" oninput="this.className = ''"
                                        name="last_name">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-7-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <h2 class="font-normal text-white">
                        <div class="container">
                            Zur Berechnung und Beantragung Ihrer Beitragsermäßigung wenden Sie sich bitte an Ihre Gesundheit
                            Versicherungsgesellschaft, wir brauchen Ihre
                            Unterschrift.
                            Hiermit beantrage ich ({Vorname, Nachname} aus Schritt 6. Hier Namen einfügen) um
                            Berechnen Sie meine Beitragsreduzierung für meine
                            Krankenversicherungsbeitrag zu zahlen und mir diese Berechnung zuzusenden.?
                        </div>
                    </h2>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <p><input type="text" placeholder="Unterschrift" oninput="this.className = ''"
                                        name="signature">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-8-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <div class="container">
                        <h2 class="font-normal text-white">Ihre Beitragsreduktion wird nun anhand Ihrer Angaben erstellt...
                            Bitte haben Sie etwas Geduld?
                        </h2>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-8-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <div class="container">
                        <h2 class="font-normal text-white">Erledigt! Ihre Ersparnis durch den Beitrag
                            Die Ermäßigung beträgt bis zu 350€ pro Monat. Auf der nächsten Seite können Sie Ihre Anfrage
                            stellen
                            Beitragsreduzierung
                        </h2>
                    </div>
                </div>
            </section>
            <section class="tab h-100 w-100 background step-8-bg">
                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                    <div class="container">

                        <p>
                            <label for="" class="text-light">Wohin sollen wir Ihnen die Berechnung Ihres senden?
                                Person
                                Beitragskürzung?</label>
                            <input type="email" placeholder="Geben Sie Ihre E-Mail-Adresse ein"
                                oninput="this.className = ''" name="email" required>
                        </p>
                        <p>
                            <label for="" class="text-light">WICHTIG! Ihre aktuelle Telefonnummer für
                                Anfragen:
                            </label>
                            <input type="text" placeholder="Telefonnummer" oninput="this.className = ''"
                                name="phone_number" required>
                        </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="agree_terms" id="aggreeTerms"
                                required>
                            <label class="form-check-label text-light" for="aggreeTerms">Ich habe das gelesen
                                Information
                                zum Datenschutz und stimme zu.</label>
                        </div>
                    </div>
                </div>
            </section>
            <div class="position-relative h-100 w-100">
                <div class="navigation-btn w-100">
                    <div
                        class="navigation-btn-responsive w-100 text-center d-flex justify-content-center align-items-center gap-2">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Vorherige</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Nächste
                        </button>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;" class="d-none">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>

                <span class="step"></span>
                <span class="step"></span>
            </div>
        </div>
    </form>
@endsection
