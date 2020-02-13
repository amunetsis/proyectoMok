import { Component, OnInit } from '@angular/core';
import {PeopleServiceService} from './people-service.service';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'mok';
  personas = null;

  persona = {
    id :null,
    nombre:null,
    apellido:null,
    edad:null,
    sexo:null,
    email:null
  }

  constructor(private personaService:PeopleServiceService){
  }

  *ngOnInit(){
    this.allPeople();
  }
   
  allPeople(){
    this.personaService.obtenerPersonas().subscribe(result => this.personas=result);
  }
}
