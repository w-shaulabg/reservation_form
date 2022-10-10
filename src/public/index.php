<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>予約フォーム</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div
        class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
          marginwidth="0" scrolling="no"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.5302722496012!2d140.72198942694857!3d41.77378431349742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9ef398b63827eb%3A0x2cf75c73f299e331!2z5Ye96aSo6aeF!5e0!3m2!1sja!2sjp!4v1665143909283!5m2!1sja!2sjp"
          width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">所在地</h2>
            <p class="mt-1">北海道函館市XX町XX-XX</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Email</h2>
            <a class="text-green-500 leading-relaxed">saito.xxx@xxx.co.jp</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">0138-XX-XXXX</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">予約ページ</h2>
        <p class="leading-relaxed mb-5 text-gray-600">ようこそ！齊藤グランドホテルへ！予約者名、Eメールアドレス、電話番号をご登録ください！</p>
        <form action="complete.php" method="post">
          <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">予約者名</label>
            <input type="text" id="name" name="name" placeholder="予約者名"
              class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" placeholder="Email"
              class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="phone_number" class="leading-7 text-sm text-gray-600">電話番号</label>
            <input type="phone_number" id="phone_number" name="phone_number" placeholder="電話番号"
              class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <button
            class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">送信</button>
        </form>
        <p class="text-xs text-gray-500 mt-3">saito grandhotel.com

        </p>
      </div>
    </div>
  </section>
</body>

</html>