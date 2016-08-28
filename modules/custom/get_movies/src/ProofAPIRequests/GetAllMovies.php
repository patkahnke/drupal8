<?php

namespace Drupal\get_movies\ProofAPIRequests;

use Symfony\Component\HttpFoundation\Response;

    class GetAllMovies
    {
        public function getMovies()
        {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://proofapi.herokuapp.com/videos?page&per_page');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'X-Auth-Token: kFDTf2t7HVfA24Red68sE31K'
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            $json = json_decode($response, true);
            $dataArray = $json[data];

            for ($i = 0; $i < count($dataArray); $i++) {

                print $dataArray[$i][attributes][title];
                print '</br>';
            }

            return new Response();

        }
    }
