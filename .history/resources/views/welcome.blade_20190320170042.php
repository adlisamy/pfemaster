<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
        <title>Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }            
        </style>
    </head>
    <body>
       <div id="app">
            <v-app>
                <v-content>
                    <v-container xs12 sm8 md4>
                         <v-layout align-center justify-center>
                              <v-flex >
                                  <app-header></app-header>
                                  <app-login></app-login>
                                  
                              </v-flex>
                         </v-layout>
                    </v-container>
                </v-content>
            </v-app>
       </div>
       <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
