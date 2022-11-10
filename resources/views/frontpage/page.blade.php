<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
      <main class="bg-white justify-around md:flex lg:flex">
        <div class="flex justify-around flex-col bg-white border-2 m-4 rounded-lg md:flex-row lg:flex-row">
          <div class="rounded-md m-2 flex-1">
            <table>
              <tr>
                <td>Mr/Mrs</td>
                <td>
                  <select class="border-2" name="" id="">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Nama Pemesan</td>
                <td>
                  <input class="border-2" type="text" />
                </td>
              </tr>
              <tr>
                <td>NIK</td>
                <td>
                  <input class="border-2" type="text" />
                </td>
              </tr>
              <tr class="border-b border-black">
                <td>Guest</td>
              </tr>
              <tr>
                <td>Mr/Mrs</td>
                <td>
                  <select class="border-2" name="" id="">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>
                  <input class="border-2" type="text" />
                </td>
              </tr>
              <tr>
                <td>Gender</td>
                <td>
                  <select class="border-2" name="" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Alergi</td>
                <td>
                  <input class="border-2" type="text" />
                </td>
              </tr>
            </table>
          </div>
          <div class="rounded-md m-2 flex-1">
            <table>
              <tr>
                <td class="item-start">Alamat</td>
                <td><textarea class="border-2" name="" id="" cols="20" rows="10"></textarea></td>
              </tr>
              <tr>
                <td>Tambahan</td>
                <td><input type="checkbox" name="" />Asuransi <br /><input type="checkbox" name="" />Breakfast</td>
              </tr>
              <tr>
                <td class="flex justify-end"><button class="px-4 py-2 bg-blue-700 rounded-lg text-white text-sm border-solid border-white">Tambah</button></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="m-4 bg-white border-2 rounded-lg h-[400px] min-h-fit">
          <h2 class="m-2 font-normal text-lg">Nama Pemesan :</h2>
          <h2 class="m-2 font-normal text-lg border-b border-black">Guest</h2>
          <div class="rounded-md m-2 w-[300px]">
            <ul>
              <li>
                <div class="flex flex-col justify-between">
                  <h2>Mr.Guest 1</h2>
                  <h2>Male, Asuransi</h2>
                </div>
              </li>
            </ul>
          </div>
          <div class="p-3 space-y-3 flex justify-end">
            <button class="px-4 py-2 bg-blue-700 rounded-lg text-white text-sm border-solid border-white">Simpan</button>
          </div>
        </div>
      </main>
    </div>
  </body>
</html> 