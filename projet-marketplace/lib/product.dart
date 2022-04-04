import 'dart:convert';
import 'package:http/http.dart' as http;
// import 'package:flutter_dotenv/flutter_dotenv.dart';

// Future main() async {
//   // To load the .env file contents into dotenv.
//   // NOTE: fileName defaults to .env and can be omitted in this case.
//   // Ensure that the filename corresponds to the path in step 1 and 2.
//   await dotenv.load(fileName: ".env");
//   //...runapp
// }

class Product {
  String baseUrl = "http://10.31.34.145:8000/api/product/products";
  // String baseUrl = "${dotenv.env['BASE_URL']}/api/product/products";


  Future<List> getAllProducts() async{
    try {
      var url = Uri.parse(baseUrl);
      var response = await http.get(url);
      if (response.statusCode == 200) {
        return jsonDecode(response.body);
      }else{
        return Future.error("Server error");
      }
    } catch (e) {
      return Future.error(e);
    }
  }

  Future<http.Response> postProduct(label, description, price, state) async{
    try {
      var url = Uri.parse(baseUrl);
      return await http.post(url, body: jsonEncode(<String, String>{
        "label": label,
        "description": description,
        "price": price,
        "state": state
      }));
    } catch (e) {
      return Future.error(e);
    }
  }
}