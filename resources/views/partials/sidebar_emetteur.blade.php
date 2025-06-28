<div class="side-bar p-relative bg-white p-20">
    <h1 class="logo text-center p-relative">LISI</h1>
    <nav>
        <ul class="link">
            
            <li class="rad-6 tt-capital">
                <a href="{{ route('userBudget.proposeLine') }}" class="{{ request()->is('propose-line') ? 'active' : '' }}">
                    <i class="fa-solid fa-bars-staggered fa-fw"></i>
                    <span class="hide-mobile">Ligne Budgétaire</span>
                </a>
            </li>
            <li class="rad-6 tt-capital">
                <a href="{{ url('/need_expression') }}" class="{{ request()->is('need_expression') ? 'active' : '' }}">
                    <i class="fa-solid fa-cart-shopping fa-fw"></i>
                    <span class="hide-mobile">Engagements</span>
                </a>
            </li>
            <li class="rad-6 tt-capital">
                <a href="{{ url('/track-expression') }}" class="{{ request()->is('track-expression') ? 'active' : '' }}">
                    <i class="fa-solid fa-list-check fa-fw"></i>
                    <span class="hide-mobile">Suivi Engagements</span>
                </a>
            </li>
            <li class="rad-6 tt-capital">
                <a href="{{ url('/my-budget') }}" class="{{ request()->is('my-budget') ? 'active' : '' }}">
                    <i class="fa-solid fa-wallet fa-fw"></i>
                    <span class="hide-mobile">Budget</span>
                </a>
            </li>
            <li class="rad-6 tt-capital">
                <a href="{{ url('/transmitter-profile') }}" class="{{ request()->is('transmitter-profile') ? 'active' : '' }}">
                    <i class="fa-regular fa-user fa-fw"></i>
                    <span class="hide-mobile">Profil</span>
                </a>
            </li>
        </ul>
    </nav>
</div>