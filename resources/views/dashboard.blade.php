<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Clustering Siswa</title>

    <!-- DataTables CSS & JS via CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 150px;
            background-color: #888;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .main {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .tables {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .table-container {
            flex: 1;
            min-width: 450px;
        }

        .buttons-top {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        button {
            padding: 6px 12px;
            font-weight: bold;
        }

        table.dataTable {
            width: 100% !important;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        Data Siswa
    </div>

    <div class="main">

        <div class="tables">
            <!-- Tabel Data Siswa -->
            <div class="table-container">
                <div class="buttons-top">
                    <button>Import Siswa</button>
                </div>
                <table id="siswaTable" class="display">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Nilai</th>
                            <th>Skor Keminatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ani</td>
                            <td>1001</td>
                            <td>85</td>
                            <td>92</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>1002</td>
                            <td>78</td>
                            <td>88</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tabel Hasil Clustering -->
            <div class="table-container">
                <div class="buttons-top">
                    <button>Proses Clustering</button>
                    <button>Export Data</button>
                </div>
                <table id="clusterTable" class="display">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Hasil Cluster</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ani</td>
                            <td>1001</td>
                            <td>Cluster 1</td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>1002</td>
                            <td>Cluster 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#siswaTable').DataTable();
            $('#clusterTable').DataTable();
        });
    </script>

</body>

</html>