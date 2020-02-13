import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class PeopleServiceService {
  url = 'http://localhost/dbmok/';
  constructor(private http:HttpClient) { }

  obtenerPersonas(){
    return this.http.get(`${this.url}mostrarPersonasJson.php`);
  }
}
