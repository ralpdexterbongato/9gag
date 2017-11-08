import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SignupemailComponent } from './signupemail.component';

describe('SignupemailComponent', () => {
  let component: SignupemailComponent;
  let fixture: ComponentFixture<SignupemailComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SignupemailComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SignupemailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
