import { Component } from '@angular/core';

import { HttpClientModule } from '@angular/common/http';
import 'rxjs';



@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'Odidi HRMS';
  submit(form:any){
    var firstName = form.fname;
    console.log(firstName);

    var middleName = form.mname;
    console.log(lastName);
  
    var lastName = form.lname;
    console.log(lastName);

    var dateOfBirth = form.dateOfBirth;
    console.log(dateOfBirth);

    var generalComments = form.generalComments;
    console.log(generalComments);

    var gender = form.gender;
    console.log(gender);

    var serviceType = form.serviceType;
    console.log(serviceType);
  }
}