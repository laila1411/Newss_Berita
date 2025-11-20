<nav class="w-full bg-[#FFF8E5] border-b border-[#FDE68A] shadow-[0_2px_10px_0_#FCD34D40] px-6 py-4">
    <div class="max-w-[1130px] mx-auto flex justify-between items-center">

        <div class="logo-container flex gap-[30px] items-center">
            <a href="{{ route('front.index') }}" class="flex items-center gap-3 shrink-0">

                <img src="{{ asset('assets/images/logos/favicon.ico') }}" alt="logo" 
                    alt="news icon" class="w-16 h-16 drop-shadow-md" />

                <span class="text-2xl font-extrabold bg-gradient-to-r from-[#D97706] to-[#FBBF24] bg-clip-text text-transparent tracking-wide">
                    Newss<span class="text-[#78350F]">Berita</span>
                </span>

            </a>

            <div class="h-12 border border-[#FCD34D]"></div>

            <form method="GET" action="{{ route('front.search') }}"
                  class="w-[450px] flex items-center rounded-full border border-[#FCD34D] p-[12px_20px] gap-[10px]
                         bg-white focus-within:ring-2 focus-within:ring-[#F59E0B] transition-all duration-300">

                @csrf

                <button type="submit" class="flex w-5 h-5 shrink-0">
                    <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
                </button>

                <input type="text" name="keyword"
                       class="appearance-none outline-none w-full font-semibold 
                              placeholder:font-normal placeholder:text-[#B45309]"
                       placeholder="Search hot trendy news today..." />
            </form>
        </div>

        <div class="flex items-center gap-3">
            <a href=""
               class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300
                      border border-[#A7F3D0] text-[#047857] bg-[#D1FAE5]
                      hover:bg-[#047857] hover:text-white hover:ring-2 hover:ring-[#34D399]
                      hover:shadow-[0_10px_20px_0_#34D39980]">
                Upgrade Pro
            </a>

            <a href=""
               class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 
                      bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880]">
                <div class="flex w-6 h-6 shrink-0">
                    <img src="{{ asset('assets/images/icons/favorite-chart.svg') }}" alt="icon" />
                </div>
                <span>Post Ads</span>
            </a>
        </div>

    </div>
</nav>
