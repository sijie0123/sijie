<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Create Product | Product Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <style>
            .form-input{
                padding: 16px 0;
                text-align:left;
             margin: 24px 50px 12px;
            }
            button {
             background-color: MediumPurple;
             color: white;
             padding: 14px 0;
             margin: 10px 0;
             border: none;
             cursor: grabbing;
             width: 100%;
            }
            h1 {
            text-align:center;
            fone-size:18;
            }
            button:hover {
            opacity: 0.8;
            }
            html, body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
            }
            form {
            border: 5px solid #f1f1f1;
            background-color: Lavender;
            }
            input[type=text], input[type=number] {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            </style>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="/create">
                @csrf
                    <h1> Create a product</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" name="name">
                    </div>

                    <div class="form-input">
                        <label>Description</label> <input type="text" name="description">
                    </div>

                    <div class="form-input">
                        <label>Count</label> <input type="number" name="count">
                    </div>

                    <div class="form-input">
                        <label>Price</label> <input type="number" name="price">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
    </html>