test
====

The test will add "value1" and "value2"

To pass values, one can use GET only

GET:
/addvalues?value1=1&value2=2



A correct response should return json such as:

{
    "sum": 3
}

If values not valid response should return json such as:

{

    "sum": "",
    "errorValue1": "Value 1 is not number",
    "errorValue2": "Value 2 is not number"

}
