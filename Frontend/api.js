const backendLocation = "../../Backend";

window.onload = loadAll();

function loadAll() {
    fetch(`${backendLocation}/generate.php`)
        .then(response => response.json())
        .then(data => {
            createText(data);
        });
}

function createText(el) {
    let item = document.createElement("div");
    item.className = "item";

    // Part 1
    let h2_1 = document.createElement("h2");
    h2_1.innerHTML = el.h2_1;
    item.appendChild(h2_1);

    let p1 = document.createElement("p");

    let storeName = document.createElement("a");
    storeName.innerHTML = el.storeName;
    storeName.href = el.storeLink;
    p1.appendChild(storeName);

    p1.innerHTML += " " + el.s2 + " " + el.s3;

    let buyTagsName1 = document.createElement("a");
    storeName.innerHTML = el.buyTagsName1;
    storeName.href = el.buyTagsLink1;
    p1.appendChild(buyTagsName1);

    p1.innerHTML += " " + el.s5 + " " + el.city + " " + el.s7 + " " + el.s8 + " " + el.s9 + " " + el.s10 + " " + el.s11 + " ";

    let goodsName1 = document.createElement("a");
    goodsName1.innerHTML = el.goodsName1;
    goodsName1.href = el.goodsLink1;
    p1.appendChild(goodsName1);

    p1.innerHTML += " " + el.s13 + " ";

    let tagsBuyName = document.createElement("a");
    tagsBuyName.innerHTML = el.tagsBuyName;
    tagsBuyName.href = el.tagsBuyLink;
    p1.appendChild(tagsBuyName);

    p1.innerHTML += " " + el.s15 + " " + el.s16 + " " + el.s17 + " " + el.s18 + " " + el.s19;

    item.appendChild(p1);

    // Part 2
    let h2_2 = document.createElement("h2");
    h2_2.innerHTML = el.h2_2;
    item.appendChild(h2_2);

    let p2 = document.createElement("p");

    p2.innerHTML += " " + el.s21 + " ";

    let tagsBuyName2 = document.createElement("a");
    tagsBuyName2.innerHTML = el.tagsBuyName2;
    tagsBuyName2.href = el.tagsBuyLink2;
    p2.appendChild(tagsBuyName2);

    p2.innerHTML += el.s23 + " " + el.s24 + " " + el.s25 + " " + el.s26 + " ";

    let tagsPriceName1 = document.createElement("a");
    tagsPriceName1.innerHTML = el.tagsPriceName1;
    tagsPriceName1.href = el.tagsPriceLink1;
    p2.appendChild(tagsPriceName1);

    p2.innerHTML +=  " " + el.s28 + " " + el.s29 + " ";

    let tagsPriceName2 = document.createElement("a");
    tagsPriceName2.innerHTML = el.tagsPriceName2;
    tagsPriceName2.href = el.tagsPriceLink2;
    p2.appendChild(tagsPriceName2);

    p2.innerHTML += " " + el.s31 + " " + el.s32 + " " + el.s33 + " ";

    let goodsName2 = document.createElement("a");
    goodsName2.innerHTML = el.goodsName2;
    goodsName2.href = el.goodsLink2;
    p2.appendChild(goodsName2);

    p2.innerHTML += " " + el.s35 + " " + el.s36;

    item.appendChild(p2);

    document.querySelector(".items").appendChild(item);
}