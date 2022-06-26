<?php
include "./spreadsheetWorker.php";

$resArr = [];

// {H2} 1 Generation
$resArr["h2_1"] = "Text " . randomData(2, [1], 4 ,11)[0];

// {Store} Generation
$data = dataByTag(1, [0, 1], "{store}", 2);
$resArr["storeName"] = $data[0];
$resArr["storeLink"] = $data[1];

// Column 2 - 3 Generation
$resArr["s2"] = randomData(0, [2], 21 ,23)[0];
$resArr["s3"] = randomData(0, [3], 21 ,30)[0];

// {Buy_tags} 1 Generation
$data = dataByTag(1, [0, 1], "{buy_tags}", 2);
$resArr["buyTagsName1"] = $data[0];
$resArr["buyTagsLink1"] = $data[1];

// Column 5 Generation
$resArr["s5"] = randomData(0, [5], 21 ,27)[0];

// {City} Generation
$resArr["city"] = randomData(3, [0], 1 ,44)[0];

// Column 7 - 11 Generation
$resArr["s7"] = randomData(0, [7], 21 ,31)[0];
$resArr["s8"] = randomData(0, [8], 21 ,27)[0];
$resArr["s9"] = randomData(0, [9], 21 ,40)[0];
$resArr["s10"] = randomData(0, [10], 21 ,26)[0];
$resArr["s11"] = randomData(0, [11], 21 ,27)[0];

// {goods} 1 Generation
$data = dataByTag(1, [0, 1], "{goods}", 2);
$resArr["goodsName1"] = $data[0];
$resArr["goodsLink1"] = $data[1];

// Column 13 Generation
$resArr["s13"] = randomData(0, [13], 21 ,22)[0];

// {Tags_buy} Generation
$data = dataByTag(1, [0, 1], "{tags_buy}", 2);
$resArr["tagsBuyName"] = $data[0];
$resArr["tagsBuyLink"] = $data[1];

// Column 15-19 Generation
$resArr["s15"] = randomData(0, [15], 21 ,28)[0];
$resArr["s16"] = randomData(0, [16], 21 ,25)[0];
$resArr["s17"] = randomData(0, [17], 21 ,30)[0];
$resArr["s18"] = randomData(0, [18], 21 ,25)[0];
$resArr["s19"] = randomData(0, [19], 21 ,32)[0];

// {H2} 2 Generation
$resArr["h2_2"] = "Text " . randomData(2, [1], 13 ,19)[0];

// Column 21 Generation
$resArr["s21"] = randomData(0, [21], 21 ,29)[0];

// {Buy_tags_2} Generation
$data = dataByTag(1, [0, 1], "{buy_tags_2}", 2);
$resArr["tagsBuyName2"] = $data[0];
$resArr["tagsBuyLink2"] = $data[1];

// Column 23 - 26 Generation
$resArr["s23"] = randomData(0, [23], 21 ,31)[0];
$resArr["s24"] = randomData(0, [24], 21 ,25)[0];
$resArr["s25"] = randomData(0, [25], 21 ,22)[0];
$resArr["s26"] = randomData(0, [26], 21 ,29)[0];

// {Tags_price} 1 Generation
$data = dataByTag(1, [0, 1], "{tags_price}", 2);
$resArr["tagsPriceName1"] = $data[0];
$resArr["tagsPriceLink1"] = $data[1];

// Column 28 - 29 Generation
$resArr["s28"] = randomData(0, [28], 21 ,24)[0];
$resArr["s29"] = randomData(0, [29], 21 ,30)[0];

// {Tags_price_2} Generation
$data = dataByTag(1, [0, 1], "{tags_price_2}", 2);
$resArr["tagsPriceName2"] = $data[0];
$resArr["tagsPriceLink2"] = $data[1];

// Column 31 - 33 Generation
$resArr["s31"] = randomData(0, [31], 21 ,30)[0];
$resArr["s32"] = randomData(0, [32], 21 ,22)[0];
$resArr["s33"] = randomData(0, [33], 21 ,22)[0];

// {goods_2} Generation
$data = dataByTag(1, [0, 1], "{goods_2}", 2);
$resArr["goodsName2"] = $data[0];
$resArr["goodsLink2"] = $data[1];

// Column 35 - 36 Generation
$resArr["s35"] = randomData(0, [35], 21 ,26)[0];
$resArr["s36"] = randomData(0, [36], 21 ,28)[0];

echo json_encode($resArr);