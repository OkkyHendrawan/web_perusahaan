Pertemuan 1
let x0 = 200;
let y0 = 200;
let r = 100;

let x1 = 200;
let y1 = 200;
let r1 = 100;

let x2 = 200;
let y2 = 200;
let r2 = 100;

function setup(){
  createCanvas(800,800);
  background(255);
}

function setup(){
  createCanvas(800,800);
  background(255);
}

function setup(){
  createCanvas(800,800);
  background(255);
}

function draw(){
  stroke('red')
  ellipse(x0, y0, r*2, r*2);
  strokeWeight(3);
  let sisi = 5;
  let sudut = 360/sisi;
  stroke(0);
  beginShape();
  for (let i=0; i<sisi; i++){
    vertex(x0+r*cos(radians(i*sudut)),
           y0+r*sin(radians(i*sudut)));
  }
  endShape(CLOSE);
  
function draw(){
  stroke('blue')
  ellipse(x1, y1, r1*2, r1*2);
  strokeWeight(3);
  let sisi = 7;
  let sudut = 360/sisi;
  stroke(0);
  beginShape();
  for (let i=0; i<sisi; i++){
    vertex(x0+r*cos(radians(i*sudut)),
           y0+r*sin(radians(i*sudut)));
  }
  endShape(CLOSE);

function draw(){
  stroke('green')
  ellipse(x2, y2, r2*2, r2*2);
  strokeWeight(3);
  let sisi = 9;
  let sudut = 360/sisi;
  stroke(0);
  beginShape();
  for (let i=0; i<sisi; i++){
    vertex(x0+r*cos(radians(i*sudut)),
           y0+r*sin(radians(i*sudut)));
  }
  endShape(CLOSE);
}
}
}