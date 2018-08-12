<?php

$url = 'https://morning-waters-61140.herokuapp.com/weather';

$data = [
    '{
         "id": 1, 
         "date": "1985-01-01",
         "location": {
              "lat": 36.1189,
              "lon": -86.6892,
              "city": "Nashville",
              "state": "Tennessee"
           },
         "temperature": [
              37.3, 36.8, 36.4, 36.0, 35.6, 35.3,
              35.0, 34.9, 35.8, 38.0, 40.2, 42.3,
              43.8, 44.9, 45.5, 45.7, 44.9, 43.0,
              41.7, 40.8, 39.9, 39.2, 38.6, 38.1
         ]
    } ',
   '{
         "id": 2, 
         "date": "1985-01-02",
         "location": {
              "lat": 36.1189,
              "lon": -86.6892,
              "city": "Nashville",
              "state": "Tennessee"
           },
         "temperature": [
              37.5, 37.0, 36.6, 36.2, 35.9, 35.5,
              35.3, 35.2, 36.1, 38.3, 40.6, 42.7,
              44.2, 45.3, 46.0, 46.1, 45.3, 43.3,
              42.0, 41.2, 40.3, 39.6, 39.0, 38.4
         ]
    }',
   '{
         "id": 3, 
         "date": "1985-01-03",
         "location": {
              "lat": 36.1189,
              "lon": -86.6892,
              "city": "Nashville",
              "state": "Tennessee"
         },
         "temperature": [
              37.9, 37.4, 37.0, 36.6, 36.3, 35.9,
              35.6, 35.4, 36.3, 38.4, 40.7, 42.7,
              44.2, 45.3, 46.0, 46.1, 45.3, 43.3,
              42.0, 41.1, 40.2, 39.4, 38.8, 38.2
         ]
    }',
   '{
         "id": 4, 
         "date": "1985-01-04",
         "location": {
              "lat": 36.1189,
              "lon": -86.6892,
              "city": "Nashville",
              "state": "Tennessee"
         },
         "temperature": [
              37.7, 37.1, 36.7, 36.3, 36.0, 35.6,
              35.2, 35.1, 35.9, 38.1, 40.3, 42.4,
              43.8, 44.9, 45.6, 45.7, 44.9, 43.0,
              41.7, 40.7, 39.8, 39.1, 38.4, 37.9
         ]
    }',
   '{
         "id": 5, 
         "date": "1985-01-01",
         "location": {
              "lat": 32.5156,
              "lon": -92.0406,
              "city": "Monroe",
              "state": "Louisiana"
         },
         "temperature": [
              42.2, 42.2, 41.7, 41.1, 40.5, 40.4,
              40.2, 39.8, 40.7, 43.6, 46.3, 48.8,
              50.5, 52.0, 53.1, 53.5, 53.2, 51.3,
              48.7, 46.9, 45.9, 44.7, 44.3, 43.7
         ]
    }',
   '{
         "id": 6, 
         "date": "1985-01-02",
         "location": {
              "lat": 32.5156,
              "lon": -92.0406,
              "city": "Monroe",
              "state": "Louisiana"
         },
         "temperature": [
              42.5, 42.5, 42.0, 41.4, 40.9, 40.8,
              40.3, 40.0, 40.9, 43.9, 46.6, 49.2,
              51.0, 52.5, 53.6, 54.0, 53.6, 51.8,
              49.2, 47.4, 46.5, 45.4, 44.9, 44.4
         ]
    }',
   '{
         "id": 7, 
         "date": "1985-01-03",
         "location": {
              "lat": 32.5156,
              "lon": -92.0406,
              "city": "Monroe",
              "state": "Louisiana"
         },
         "temperature": [
              43.2, 43.2, 42.6, 42.0, 41.4, 41.3,
              40.7, 40.3, 41.2, 44.2, 46.9, 49.4,
              51.1, 52.5, 53.6, 54.1, 53.7, 51.8,
              49.2, 47.3, 46.4, 45.4, 44.8, 44.5
         ]
    }',
   '{
         "id": 8, 
         "date": "1985-01-04",
         "location": {
              "lat": 32.5156,
              "lon": -92.0406,
              "city": "Monroe",
              "state": "Louisiana"
         },
         "temperature": [
              43.1, 43.1, 42.5, 41.8, 41.3, 41.2,
              40.4, 40.0, 40.9, 43.9, 46.6, 49.1,
              50.8, 52.3, 53.4, 54.0, 53.6, 51.7,
              49.2, 47.2, 46.3, 45.3, 44.7, 44.3
         ]
    }',
   '{
         "id": 9, 
         "date": "1985-01-01",
         "location": {
              "lat": 32.5,
              "lon": -93.6667,
              "city": "Shreveport",
              "state": "Louisiana"
         },
         "temperature": [
              53.6, 53.6, 53.6, 53.6, 53.6, 53.6,
              39.4, 39.4, 40.1, 42.9, 45.8, 48.5,
              50.3, 52.0, 53.2, 53.6, 53.4, 51.6,
              48.8, 46.8, 45.5, 44.5, 53.6, 53.6
         ]
    }',
   '{
         "id": 10, 
         "date": "1985-01-02",
         "location": {
              "lat": 32.5,
              "lon": -93.6667,
              "city": "Shreveport",
              "state": "Louisiana"
         },
         "temperature": [
              53.9, 53.9, 53.9, 53.9, 53.9, 53.9,
              39.5, 39.5, 40.2, 43.1, 45.9, 48.6,
              50.5, 52.1, 53.4, 53.9, 53.7, 52.0,
              49.1, 47.0, 45.8, 44.8, 44.2, 43.4
         ]
    }',
   '{
         "id": 11, 
         "date": "1985-01-03",
         "location": {
              "lat": 32.5,
              "lon": -93.6667,
              "city": "Shreveport",
              "state": "Louisiana"
         },
         "temperature": [
              42.6, 54.0, 54.0, 54.0, 54.0, 54.0,
              39.6, 39.6, 40.3, 43.2, 46.0, 48.7,
              50.5, 52.2, 53.4, 54.0, 53.8, 52.0,
              49.1, 47.0, 45.7, 44.7, 44.1, 43.1
         ]
    }',
   '{
         "id": 12, 
         "date": "1985-01-04",
         "location": {
              "lat": 32.5,
              "lon": -93.6667,
              "city": "Shreveport",
              "state": "Louisiana"
         },
         "temperature": [
              42.3, 54.1, 54.1, 54.1, 54.1, 40.1,
              40.1, 39.4, 40.1, 43.1, 45.8, 48.6,
              50.5, 52.1, 53.4, 54.1, 54.0, 52.2,
              49.2, 47.1, 45.7, 44.7, 44.1, 43.2
         ]
    }'
];
foreach($data as $key => $val){
    $payload = json_encode($val);
    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER  , true);
    
    $result = curl_exec($ch);
    print_r($result); echo '<br>';
    
    curl_close($ch);
}