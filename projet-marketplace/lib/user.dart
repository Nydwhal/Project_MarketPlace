import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:dotenv/dotenv.dart' show load, env;

class User {
  String baseUrl = "${env['BASE_URL']}/admin/user";

  Future<List> getAllUsers() async{
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

  Future<http.Response> postUser(name, email, password) async{
    try {
      var url = Uri.parse(baseUrl);
      return await http.post(url, body: jsonEncode(<String, String>{
        "name": name,
        "email": email,
        "password": password
      }));
    } catch (e) {
      return Future.error(e);
    }
  }
}