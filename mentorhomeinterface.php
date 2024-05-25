<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Dashboard</title>
  <style>
    body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
}

h1, h2 {
  margin: 0;
}

main {
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
}

section {
  flex: 1 0 30%;
  margin: 10px;
  padding: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.calendar {
  text-align: center;
}

.events, .announcements {
  list-style: none;
  padding: 0;
}
</style>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>University Management System</h1>
  </header>
  <main>
    <section class="calendar">
      <h2>Calendar</h2>
      </section>
    <section class="events">
      <h2>Upcoming Events</h2>
      <ul>
        <li>Sample Event - May 20, 2024</li>
        <li>Another Event - May 25, 2024</li>
      </ul>
    </section>
    <section class="announcements">
      <h2>Announcements</h2>
      <p>Welcome back to the new semester!</p>
    </section>
  </main>
</body>
</html>

