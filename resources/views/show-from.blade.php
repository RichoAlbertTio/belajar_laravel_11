<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Show Form</title>
</head>
<body>
   <h1>Show Form Request</h1>
   <h2>GET METHOD</h2>
   {{-- url method get --}}
   <a href="/send-get?message=saya+sedang+ngoding+laravel" target="_blank">Send Get Method</a>
   <br><br>

   {{-- method post --}}
   <h2>POST METHOD</h2>
   <form action="/send-post" method="post">
      @csrf
      <label for="message">Message</label>
      <input type="text" name="message" id="message" placeholder="Input Message">
      <button type="submit">Send Message</button>
   </form>
   <br><br>
   {{-- PUT / PATH --}}
   <h2>PUT METHOD</h2>
   <form action="/send-put" method="post">
      @csrf
      @method('put')
      <label for="message">Message</label>
      <input type="text" name="message" id="message" placeholder="Input Message">
      <button type="submit">Send Message</button>
   </form>
   <br><br>

   {{-- PUT / PATH --}}
   <h2>DELETE METHOD</h2>
   <form action="/send-delete" method="post">
      @csrf
      @method('delete')
      <button type="submit">Delete Message</button>
   </form>
   <br><br>

</body>
</html>