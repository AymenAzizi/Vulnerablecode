app.get('/go', (req, res) => {
  const url = req.query.url;
  res.redirect(url);
});
