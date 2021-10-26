<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>View Products | Product Store</title>
        <!-- Styles etc. -->
    </head>
    <style>
        table {
                border-collapse: separate;
                border:1px solid blue;
                padding: 3px;
                vertical-align: middle;
                text-align: center;
                background: white;
                color: black;
                margin-left: 15%;
                border-radius:2%;
                width: 70%;
            }
            th {
                border:1px solid blue;
                font-weight: bold;
                font-size: 25px;
                background-color: LightGoldenRodYellow;
                font-family: monospace;
                text-align: center;
                padding: 16px 20px;
                border-radius:8%;
            }

            td {
                border:1px solid blue;
                text-align: center;
                font-size: 20px;
                font-family: monospace;
                padding: 14px 16px;
                border-radius:8%;
            }
            tr:hover {
                background-color: #f5f5f5;
            }
            body{
                background-color: Lavender;
            }
}
        </style>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1 style="color:white; text-align: center;font-size: 50px; text-shadow: 2px 0 blue, 0 3px blue, 3px 0 blue, 0 2px blue; margin-left: 40px; ">Here's a list of available products</h1>
                <table>
                    <thead>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Count</td>
                        <td>Price</td>
                    </thead>
                    <tbody>
                        @foreach ($productinfo as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td class="inner-table">{{ $product->description }}</td>
                                <td class="inner-table">{{ $product->count }}</td>
                                <td class="inner-table">{{ $product->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>