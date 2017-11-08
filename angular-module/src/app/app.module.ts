import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { SignupComponent } from './signup/signup.component';
import { HotComponent } from './hot/hot.component';
import { SignupemailComponent } from './signupemail/signupemail.component';

const appRoutes: Routes = [
  { path:'login', component:LoginComponent },
  { path:'signup', component:SignupComponent},
  { path: '', component:HotComponent},
  { path: 'membership', component:SignupemailComponent},
  { path: 'hot',
    redirectTo: '',
    pathMatch: 'full'
  }
];

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    SignupComponent,
    HotComponent,
    SignupemailComponent,

  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
