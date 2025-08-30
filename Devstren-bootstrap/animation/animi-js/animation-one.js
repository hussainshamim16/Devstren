const  { animate, stagger } = anime;

animate('.square', {
  // Increase translateX by 5.75rem for each elements
  x: stagger('5.75rem'),
  // Increase delay by 100ms for each elements
  delay: stagger(100)
});