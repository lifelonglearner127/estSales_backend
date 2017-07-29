<?php

use Illuminate\Database\Seeder;
use App\InitialSample;
use App\Domain;
use App\ProductCategory as Category;

class InitialSamplesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $estComSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 60000 ],
                [ "min" => 6, "max" => 10, "estSale" => 52500 ],
                [ "min" => 11, "max" => 20, "estSale" => 45000 ],
                [ "min" => 21, "max" => 35, "estSale" => 37500 ],
                [ "min" => 36, "max" => 100, "estSale" => 27500 ],
                [ "min" => 101, "max" => 200, "estSale" => 15000 ],
                [ "min" => 201, "max" => 350, "estSale" => 6000 ],
                [ "min" => 351, "max" => 500, "estSale" => 3000 ],
                [ "min" => 501, "max" => 750, "estSale" => 2250 ],
                [ "min" => 751, "max" => 1500, "estSale" => 1650 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 1275 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 1050 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 850 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 750 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 625 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 500 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 375 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 300 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 215 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 175 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 155 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 142 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 122 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 100 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 70 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 55 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 25 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 12 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 7 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 2 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estAuSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 19800 ],
                [ "min" => 6, "max" => 10, "estSale" => 17325 ],
                [ "min" => 11, "max" => 20, "estSale" => 14850 ],
                [ "min" => 21, "max" => 35, "estSale" => 12375 ],
                [ "min" => 36, "max" => 100, "estSale" => 9075 ],
                [ "min" => 101, "max" => 200, "estSale" => 4950 ],
                [ "min" => 201, "max" => 350, "estSale" => 1980 ],
                [ "min" => 351, "max" => 500, "estSale" => 990 ],
                [ "min" => 501, "max" => 750, "estSale" => 742 ],
                [ "min" => 751, "max" => 1500, "estSale" => 544 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 420 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 346 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 280 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 247 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 206 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 165 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 123 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 99 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 70 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 57 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 51 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 46 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 40 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 33 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 23 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 18 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 8 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 3 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 2 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estCaSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 25200 ],
                [ "min" => 6, "max" => 10, "estSale" => 22050 ],
                [ "min" => 11, "max" => 20, "estSale" => 18900 ],
                [ "min" => 21, "max" => 35, "estSale" => 15750 ],
                [ "min" => 36, "max" => 100, "estSale" => 11550 ],
                [ "min" => 101, "max" => 200, "estSale" => 6300 ],
                [ "min" => 201, "max" => 350, "estSale" => 2520 ],
                [ "min" => 351, "max" => 500, "estSale" => 1260 ],
                [ "min" => 501, "max" => 750, "estSale" => 945 ],
                [ "min" => 751, "max" => 1500, "estSale" => 693 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 535 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 441 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 357 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 315 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 262 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 210 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 157 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 126 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 90 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 73 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 65 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 60 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 51 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 42 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 29 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 23 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 10 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 5 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 3 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estCoUKSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 27000 ],
                [ "min" => 6, "max" => 10, "estSale" => 23625 ],
                [ "min" => 11, "max" => 20, "estSale" => 20250 ],
                [ "min" => 21, "max" => 35, "estSale" => 16875 ],
                [ "min" => 36, "max" => 100, "estSale" => 12375 ],
                [ "min" => 101, "max" => 200, "estSale" => 6750 ],
                [ "min" => 201, "max" => 350, "estSale" => 2700 ],
                [ "min" => 351, "max" => 500, "estSale" => 1350 ],
                [ "min" => 501, "max" => 750, "estSale" => 1012 ],
                [ "min" => 751, "max" => 1500, "estSale" => 742 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 573 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 472 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 382 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 337 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 281 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 225 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 168 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 135 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 96 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 78 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 69 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 64 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 55 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 45 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 31 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 24 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 11 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 6 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 3 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estDeSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 10200 ],
                [ "min" => 6, "max" => 10, "estSale" => 8925 ],
                [ "min" => 11, "max" => 20, "estSale" => 7650 ],
                [ "min" => 21, "max" => 35, "estSale" => 6375 ],
                [ "min" => 36, "max" => 100, "estSale" => 4675 ],
                [ "min" => 101, "max" => 200, "estSale" => 2550 ],
                [ "min" => 201, "max" => 350, "estSale" => 1020 ],
                [ "min" => 351, "max" => 500, "estSale" => 510 ],
                [ "min" => 501, "max" => 750, "estSale" => 382 ],
                [ "min" => 751, "max" => 1500, "estSale" => 280 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 216 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 178 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 144 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 127 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 106 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 85 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 63 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 51 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 36 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 29 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 26 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 24 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 21 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 17 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 12 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 9 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 4 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 2 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 1 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estEsSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 12240 ],
                [ "min" => 6, "max" => 10, "estSale" => 10710 ],
                [ "min" => 11, "max" => 20, "estSale" => 9180 ],
                [ "min" => 21, "max" => 35, "estSale" => 7650 ],
                [ "min" => 36, "max" => 100, "estSale" => 5610 ],
                [ "min" => 101, "max" => 200, "estSale" => 3060 ],
                [ "min" => 201, "max" => 350, "estSale" => 1224 ],
                [ "min" => 351, "max" => 500, "estSale" => 612 ],
                [ "min" => 501, "max" => 750, "estSale" => 459 ],
                [ "min" => 751, "max" => 1500, "estSale" => 336 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 260 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 214 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 173 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 153 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 127 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 102 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 76 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 61 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 44 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 35 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 31 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 29 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 25 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 20 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 14 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 11 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 5 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 2 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 1 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estFrSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 7380 ],
                [ "min" => 6, "max" => 10, "estSale" => 6457 ],
                [ "min" => 11, "max" => 20, "estSale" => 5535 ],
                [ "min" => 21, "max" => 35, "estSale" => 4612 ],
                [ "min" => 36, "max" => 100, "estSale" => 3382 ],
                [ "min" => 101, "max" => 200, "estSale" => 1845 ],
                [ "min" => 201, "max" => 350, "estSale" => 738 ],
                [ "min" => 351, "max" => 500, "estSale" => 369 ],
                [ "min" => 501, "max" => 750, "estSale" => 276 ],
                [ "min" => 751, "max" => 1500, "estSale" => 203 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 157 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 129 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 104 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 92 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 77 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 61 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 46 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 37 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 26 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 21 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 19 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 17 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 15 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 12 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 8 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 6 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 5 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 3 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 1 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estInSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 15000 ],
                [ "min" => 6, "max" => 10, "estSale" => 13125 ],
                [ "min" => 11, "max" => 20, "estSale" => 11250 ],
                [ "min" => 21, "max" => 35, "estSale" => 9375 ],
                [ "min" => 36, "max" => 100, "estSale" => 6875 ],
                [ "min" => 101, "max" => 200, "estSale" => 3750 ],
                [ "min" => 201, "max" => 350, "estSale" => 1500 ],
                [ "min" => 351, "max" => 500, "estSale" => 750 ],
                [ "min" => 501, "max" => 750, "estSale" => 562 ],
                [ "min" => 751, "max" => 1500, "estSale" => 412 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 319 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 262 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 212 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 187 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 156 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 125 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 94 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 75 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 54 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 44 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 39 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 35 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 30 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 25 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 17 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 14 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 6 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 3 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 2 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estItSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 13260 ],
                [ "min" => 6, "max" => 10, "estSale" => 11602 ],
                [ "min" => 11, "max" => 20, "estSale" => 9945 ],
                [ "min" => 21, "max" => 35, "estSale" => 8287 ],
                [ "min" => 36, "max" => 100, "estSale" => 6077 ],
                [ "min" => 101, "max" => 200, "estSale" => 3315 ],
                [ "min" => 201, "max" => 350, "estSale" => 1326 ],
                [ "min" => 351, "max" => 500, "estSale" => 663 ],
                [ "min" => 501, "max" => 750, "estSale" => 497 ],
                [ "min" => 751, "max" => 1500, "estSale" => 364 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 282 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 232 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 188 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 166 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 138 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 110 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 83 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 66 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 47 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 38 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 34 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 31 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 27 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 22 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 15 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 12 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 5 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 2 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 1 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $estJpSalesScale = [
                [ "min" => 1, "max" => 5, "estSale" => 33000 ],
                [ "min" => 6, "max" => 10, "estSale" => 28875 ],
                [ "min" => 11, "max" => 20, "estSale" => 24750 ],
                [ "min" => 21, "max" => 35, "estSale" => 20625 ],
                [ "min" => 36, "max" => 100, "estSale" => 15125 ],
                [ "min" => 101, "max" => 200, "estSale" => 8250 ],
                [ "min" => 201, "max" => 350, "estSale" => 3300 ],
                [ "min" => 351, "max" => 500, "estSale" => 1650 ],
                [ "min" => 501, "max" => 750, "estSale" => 1238],
                [ "min" => 751, "max" => 1500, "estSale" => 908 ],
                [ "min" => 1501, "max" => 3000, "estSale" => 701 ],
                [ "min" => 3001, "max" => 4000, "estSale" => 578 ],
                [ "min" => 4001, "max" => 5000, "estSale" => 468 ],
                [ "min" => 5001, "max" => 6000, "estSale" => 413 ],
                [ "min" => 6001, "max" => 7000, "estSale" => 344 ],
                [ "min" => 7001, "max" => 8000, "estSale" => 275 ],
                [ "min" => 8001, "max" => 9000, "estSale" => 206 ],
                [ "min" => 9001, "max" => 10000, "estSale" => 165 ],
                [ "min" => 10001, "max" => 12000, "estSale" => 118 ],
                [ "min" => 12001, "max" => 15000, "estSale" => 96 ],
                [ "min" => 15001, "max" => 17500, "estSale" => 85 ],
                [ "min" => 17501, "max" => 20000, "estSale" => 78 ],
                [ "min" => 20001, "max" => 25000, "estSale" => 67 ],
                [ "min" => 25001, "max" => 30000, "estSale" => 55 ],
                [ "min" => 30001, "max" => 35000, "estSale" => 39 ],
                [ "min" => 35001, "max" => 50000, "estSale" => 30 ],
                [ "min" => 50001, "max" => 65000, "estSale" => 14 ],
                [ "min" => 65001, "max" => 80000, "estSale" => 7 ],
                [ "min" => 80001, "max" => 100000, "estSale" => 4 ],
                [ "min" => 100001, "max" => 200000, "estSale" => 1 ],
                [ "min" => 200001, "max" => 500000, "estSale" => 1 ],
                [ "min" => 500001, "max" => -1, "estSale" => 1]
            ];

        $InitialData = [
                "amazon.com" => $estComSalesScale,
                "amazon.ca" => $estCaSalesScale,
                "amazon.com.au" => $estAuSalesScale,
                "amazon.co.uk" => $estCoUKSalesScale,
                "amazon.de" => $estDeSalesScale,
                "amazon.es" => $estEsSalesScale,
                "amazon.fr" => $estFrSalesScale,
                "amazon.in" => $estInSalesScale,
                "amazon.it" => $estItSalesScale,
                "amazon.jp" => $estJpSalesScale
        ];
        
        $domains = Domain::all();

        $book = Category::where(['category_name' => "Books"])->first();
        $eBook = Category::where(['category_name' => "eBooks"])->first();
        
        foreach($domains as $domain) {
            $samples = $InitialData[$domain->name];
            foreach($samples as $sample) {
                $row = InitialSample::FirstOrCreate([
                    'domain_id' => $domain->id,
                    'category_id' => $book->id,
                    'min' => $sample['min'],
                    'max' => $sample['max'],
                    'est' => $sample['estSale']
                ]);

                $row = InitialSample::FirstOrCreate([
                    'domain_id' => $domain->id,
                    'category_id' => $eBook->id,
                    'min' => $sample['min'],
                    'max' => $sample['max'],
                    'est' => $sample['estSale']
                ]);
            }
        }
    }
}
