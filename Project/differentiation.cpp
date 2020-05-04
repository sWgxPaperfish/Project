#include<iostream>
#include<sstream>
#include<string.h>
#include<cmath>
using namespace std;
//Defining simple terms---------------------------------------------------------------------
class term{
      public:
             //elements of term
      double times[10];
      string termx[10];
      double power[10];
      string wholeterm[10];
      // a function to save terms quickily
      term(double atimes , string atermx , double apower , string awholeterm, int numinarray){
      times[numinarray] = atimes;
      termx[numinarray] = atermx;
      power[numinarray] = apower;
      wholeterm[numinarray] = awholeterm;}
          
      };
//Defining terms of sines---------------------------------------------------------------------
class sine{
      public:
             //elements of a term of sine
      double times[10];
      string termx[10];
      double timesx[10];
      double power[10];
      string wholeterm[10];
      // a function to save terms quickily
      sine(double atimes , string atermx , double atimesx, double apower , string awholeterm, int numinarray){
      times[numinarray] = atimes;
      termx[numinarray] = atermx;
      timesx[numinarray] = atimesx;
      power[numinarray] = apower;
      wholeterm[numinarray] = awholeterm;}
      };
//Power rule differentiation--------------------------------------------------------------------
double differentiate1 (double dtimes1 = 1 , double dpower1 = 1){
double differentiatetimes = dpower1*dtimes1;
return differentiatetimes;}

double differentiate2 (double dtimes2=1, double dpower2=1){
if (dpower2 != 0){return dpower2 -1 ;}
else {return 0;};}
//Sine differentiation of sin with power = 1
double differentiatesin1(double dtimes, double dtimesx, double dpower){
double finaltimes = 0;
finaltimes = dtimes * dtimesx * dpower;
return finaltimes;}

double differentiatesin2(double dtimes2, double dtimesx2, double dpower2){
double finaltimesx;
finaltimesx = dtimesx2;
return finaltimesx;}

double differentiatesin3(double dtimes3, double dtimesx3, double dpower3){
double finalpower;
if (dpower3 != 1){finalpower = dpower3 - 1;}
else {finalpower = 1;}
return finalpower;}

//MAIN-------------------------------------------------------------------------------
int main(){
term term1 (0.0,"x",0.0,"x",0);
sine sin1 (0.0,"sinx",0.0,0.0,"sinx",0);
sine sin2 (0.0,"sinx",0.0,0.0,"sinx",0);
sine cos2 (0.0,"cosx",0.0,0.0,"cosx",0);
    /*Debug: showing the array of terms in term1:
    int i;
    for (i=0 ; i<=10 ; i++){ 
    cout<<term1.times[i]<<"  "<<term1.termx[i]<<"  "<<term1.power[i]<<"  "<<term1.wholeterm[i]<<endl;} */
//User Manual
cout<<"User Manual of this program of differentiation:"<<endl;
cout<<"Rule1:The formula entered must be a polynomial."<<endl;
cout<<"Rule2:The formula enterred must be in the form of ax^n+bx^n-1+...+zx^0."<<endl;
cout<<"Rule3:Avoid entering decimal numbers, fractions or something to avoid crashing of program."<<endl;
//Letting the user enter the required formula----------------------------------------------
string rawinput;
cout<<"Input the expression:"<<endl;
getline(cin,rawinput);

//determining number of x (terms) involved ------------------------------------------------------------------------
int numofterms,temp1=-1;
for (numofterms = 0 ; rawinput.find('x',temp1+1) <= rawinput.length() ;numofterms++){
    temp1 = rawinput.find('x',temp1+1);}
/*double temp20=0,temp22=0,temp24=0; 
int temp25=0;
for (int temp26 = 0; temp25 + 4<=rawinput.length();numofterms++){
    temp20 = rawinput.find('+',temp25+1);
    temp20 = temp20 +0.5 - (temp20<0);
    int temp21 = (int)temp20;
    
    temp22 = rawinput.find('-',temp25+1);
    temp22 = temp22 + 0.5 - (temp22<0);
    int temp23 = (int)temp22;
    
    temp24 = fmin(temp21,temp23);
    temp24 = temp24 + 0.5 - (temp24<0);
    temp26 = (int)temp24;
    temp25=temp26;}*/
/*Debug:Showing number of terms*/
cout<<"There are " <<numofterms<<" terms."<<endl; 

//setting up substring by terms-------------------------------------------------------------------------------
int temp2=0,temp5=0;
double temp6=0,temp7=0,temp8=0;
for (temp2 = 0; temp2<numofterms; temp2++){
    //temp11 is just the position of the next +/-
    temp6 = rawinput.find('+',temp5+1);
    temp6 = temp6 +0.5 - (temp6<0);
    int temp9 = (int)temp6;
    
    temp7 = rawinput.find('-',temp5+1);
    temp7 = temp7 + 0.5 - (temp7<0);
    int temp10 = (int)temp7;
    
    temp8 = fmin(temp6,temp7);
    temp8 = temp8 + 0.5 - (temp8<0);
    int temp11 = (int)temp8;

  
if (temp2==0){
term1.wholeterm[temp2] = rawinput.substr(temp5 , temp11 - temp5-1);}
else {term1.wholeterm[temp2] = rawinput.substr(temp5-1, temp11 - temp5);}
temp5 = temp11;}
/*Debug: Showing that the terms are separated successfully.*/
cout<<"The terms are separated as:";
for (temp2 = 0; temp2<numofterms; temp2++){
cout<<term1.wholeterm[temp2]<<"  ";} 

//analyzing the times and power of the terms--------------------------------------------------
int temp3 ; temp5=0; int temp13 = 0 , temp9 = 0 ,temp10 = 0, temp14 = 0;
cout<<"\n After analyzing the terms, the terms are:";
for (temp3 = 0 ; temp3<numofterms ; temp3++){
    //Let each term (in substring) be "analyseterm"
    string analyseterm = term1.wholeterm[temp3];
    //determining if the term is a constant
    int analysetermlength3 = analyseterm.length();
    char determinesine3[analysetermlength3+1];
    strcpy(determinesine3,analyseterm.c_str());
    int whethersinispresent3=0;
    for (int temp18 =0; temp18<analysetermlength3 ; temp18++){
        if(determinesine3[temp18]=='x'){whethersinispresent3++;}}
    if (whethersinispresent3 =0){
    term1.wholeterm[temp3]=="+[Constant]";
                             }else{
    //Determining whether the term has sin
    int analysetermlength = analyseterm.length();
    char determinesine[analysetermlength+1];
    strcpy(determinesine,analyseterm.c_str());
    int whethersinispresent=0;
    for (int temp17 =0; temp17<analysetermlength ; temp17++){
        if(determinesine[temp17]=='s' || determinesine[temp17]=='i' || 
        determinesine[temp17]=='n'){whethersinispresent++;}}
     if (whethersinispresent>=3 ){
     //finding where the times of sine start; finding the nearest + / - / ) before sine 
    if (analyseterm.find('+',temp5) > analyseterm.length() ){temp9 = 0;}else{
    temp6 = analyseterm.find('+',temp5);
    temp6 = temp6 +0.5 - (temp6<0);
    int temp9 = (int)temp6;}
    if (analyseterm.find('-',temp5)>analyseterm.length()){temp10=0;}else{
    temp7 = analyseterm.find('-',temp5);
    temp7 = temp7 + 0.5 - (temp7<0);
    int temp10 = (int)temp7;}
    
    temp8 = fmax(temp6,temp7);
    temp8 = temp8 + 0.5 - (temp8<0);
    int temp11 = (int)temp8;
    
    if (analyseterm.find(')',temp5)>analyseterm.length()){temp14=0;}else{
    double temp13 = analyseterm.find(')',temp5);
    temp13 = temp13 + 0.5 - (temp13<0);
    int temp14 = (int)temp13;}
    double temp15 = fmax(temp11,temp14);
    temp15 = temp15 + 0.5 - (temp15<0);
    int temp16 = (int)temp15;
    temp5 = temp16+1 ;
     //aiming at the position of sine and +/-/) , analyzing the times of sin
     stringstream timessin(analyseterm.substr(temp16,analyseterm.find('sin(',temp16)-temp16));
     timessin >> sin1.times[temp3];
     //aiming at the position of sine and +/-/) , analyzing the times in sin
     /*Debug: Showing the times in x:
              cout<<"The substring is"<<analyseterm.substr(analyseterm.find('sin(',temp16)+1, 
     analyseterm.find( ')^(' ,temp16)-analyseterm.find('sin(',temp16)+1)<<endl;*/
     stringstream timesinsin(analyseterm.substr(analyseterm.find('sin(',temp16)+1,
     analyseterm.find( ')^(' ,temp16)-analyseterm.find('sin(',temp16)-4)
     );
     timesinsin >> sin1.timesx[temp3]; 
     //aiming at the position of sine and +/-/) , analyzing the power of sin
     /*Debug: Showing the power of sinx:
     cout<<"\n"<<analyseterm;
     cout<<"\n"<<temp16;
     cout<<"\n"<<analyseterm.find('^',temp16)+2<<"  "<< 
     analyseterm.find(')',analyseterm.find('^',temp16+1))-
     analyseterm.find('^',temp16+1)-2
     <<endl;
     cout<<"\nThe substring is:"<<analyseterm.substr(analyseterm.find('^',temp16)+2,
    analyseterm.find(')',analyseterm.find('^',temp16+1))-analyseterm.find('^',temp16+1)-2)<<endl;*/
     stringstream powerofsin(analyseterm.substr(analyseterm.find('^',temp16)+2,
    analyseterm.find(')',analyseterm.find('^',temp16+1))-analyseterm.find('^',temp16+1)-2));
     powerofsin >> sin1.power[temp3];
     //citing the whole term of sin
     sin1.wholeterm[temp3] = analyseterm;
     //Debug: cout<<"\nThe whole term is:"<<sin1.wholeterm[temp3]<<endl; 
     cout<<"\nA term including sin:    "<<sin1.times[temp3]<<"sin("<<sin1.timesx[temp3]<<
     "x)^("<<sin1.power[temp3]<<")"<<endl;
     }else{
     //string analysetimes is used to determine the times of sine
     string analysetimes = 
     term1.wholeterm[temp3].substr(0,term1.wholeterm[temp3].find('x'));
     //dealing with fractions
     if (analysetimes.find('/',0)<analysetimes.length()){
     string analysenominator = analysetimes.substr(0,analysetimes.find('/')-1);
     string analysedenominator = analysetimes.substr(analysetimes.find('/')+1,
     analysetimes.length()-analysetimes.find('/'));
     stringstream nominator1(analysenominator);
     double nominator2=0;
     nominator1 >> nominator2;
     stringstream denominator1(analysedenominator);
     double denominator2=0;
     denominator1 >> denominator2;
     term1.times[temp3] = nominator2 / denominator2 * 10;}else{
     //normal integer recognization
     stringstream degree(analysetimes);
     degree >> term1.times[temp3];}
     
     string analysepower = term1.wholeterm[temp3].substr(
     term1.wholeterm[temp3].find('^')+2,
     term1.wholeterm[temp3].length()-term1.wholeterm[temp3].find('^')-1);
     stringstream degree2(analysepower);
     degree2 >> term1.power [temp3];
     cout<<"There is a term called:     "<<term1.times[temp3]<<
     "x^("<<term1.power[temp3]<<")  \n";}}
/*Debug:Showing terms being analysed successfully.
*/}

//Finding the derivatives by power rule------------------------------------------------------
int temp4;

cout<<"\nThe derivative is "<<endl;
for (temp4 = 0 ; temp4<numofterms ; temp4++){
    int analysetermlength2 = term1.wholeterm[temp4].length();
    char determinesine2[analysetermlength2+1];
    strcpy(determinesine2,term1.wholeterm[temp4].c_str());
    int whethersinispresent2=0,whetherconstant = 0;
    for (int temp18 =0; temp18<analysetermlength2 ; temp18++){
        if(determinesine2[temp18]=='s' || determinesine2[temp18]=='i' || 
        determinesine2[temp18]=='n'){whethersinispresent2++;}
        if (determinesine2[temp18] == ']'||determinesine2[temp18]=='['){whetherconstant++;}}
     if (whetherconstant!=0){cout<<term1.wholeterm[temp4]<<"  ";}else{
     if (whethersinispresent2>=3 ){
    if (sin1.power[temp4]!=0 || sin1.times!=0){
    if (sin1.power[temp4] == 1){
    cos2.times[temp4]=differentiatesin1(sin1.times[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    cos2.timesx[temp4] = differentiatesin2(sin1.timesx[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    cos2.power[temp4] = differentiatesin3(sin1.power[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    sin2.times[temp4]=0;sin2.timesx[temp4]=0;sin2.power[temp4]=0;
    cout<<cos2.times[temp4]<<"cos("<<cos2.timesx[temp4]<<"x)^("<<cos2.power[temp4]<<")  ";}
    else {
    cos2.times[temp4]=differentiatesin1(sin1.times[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    sin2.times[temp4]=0;
    sin2.timesx[temp4] = differentiatesin2(sin1.timesx[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    sin2.power[temp4] = differentiatesin3(sin1.timesx[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    cos2.times[temp4]=differentiatesin1(sin1.times[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    cos2.timesx[temp4] = differentiatesin2(sin1.timesx[temp4],sin1.timesx[temp4],sin1.power[temp4]);
    cos2.power[temp4] = 1;
    cout<<cos2.times[temp4]<<"sin("<<sin2.timesx[temp4]<<"x)^("<<sin2.power[temp4]<<")"<<
    "cos("<<cos2.timesx[temp4]<<"x)^("<<cos2.power[temp4]<<")  ";}
         }
         }else{
cout<<differentiate1(term1.times[temp4], term1.power[temp4])<<
"x^("<<differentiate2(term1.times[temp4], term1.power[temp4])<<")  ";}
;}}
cout<<endl;
system("pause");
return 0;
}
/*analyzing the times of terms[Broken program]----------------------------------------------------------
void analyse2 (string s2, int noofterms2){
     string analysepower = s2.substr(4,1);
     stringstream degree(analysepower);
     term term1(0,"x",0,"x",10);
     degree >> term1.power [noofterms2];}
     
int analyse(string s1, int noofterms){
     string analysetimes = s1.substr(0,1);
     stringstream degree(analysetimes);
     degree >> term1.times[noofterms];
     analyse2 (s1,noofterms);
     return 0;}*/
/* string --> int
stringstream degree(string);
     degree >> integer;
*//* double --> int
float x = 55; // stored as 54.999999...
x = x + 0.5 - (x<0); // x is now 55.499999...
int y = (int)x; // truncated to 55
*/
/* a contains b
int analysetermlength = analyseterm.length();
    char determinesine[analysetermlength+1];
    strcpy(determinesine,analyseterm.c_str());
    int whethersinispresent=0;
    for (int temp17 =0; temp17<analysetermlength ; temp17++){
        if(determinesine[temp17]=='s' || determinesine[temp17]=='i' || 
        determinesine[temp17]=='n'){whethersinispresent++;}}
     if (whethersinispresent>=3 ){
    */
//Values for debugging-------------------------------------------------
//+48923x^8-23748x^4-37941x^3  
//-4sin(8x)^(9)+3sin(4x)^(7)-2sin(7x)^(4)
//-23sin(453x)^(79)-43sin(741x)^(748)-2sin(7x)^(7)
//-23sin(4x)^(10)-1sin(5x)^(1)+1x^(2)
