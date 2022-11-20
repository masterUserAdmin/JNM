<x-app-layout>
    <x-content.dashboard id="content_dashboard">
    </x-content.dashboard>
    <x-content.users id="content_users" class="hidden">
    </x-content.users>
    <x-content.partners id="content_partners" class="hidden">
    </x-content.partners>
    <x-content.transports id="content_transports" class="hidden">
    </x-content.transports>
    <script type="text/javascript">
        const button_menu_toggle_dashboard = document.getElementById('button_menu_toggle_dashboard');
        const button_menu_toggle_users = document.getElementById('button_menu_toggle_users');
        const button_menu_toggle_partners = document.getElementById('button_menu_toggle_partners');
        const button_menu_toggle_transports = document.getElementById('button_menu_toggle_transports');

        const content_dashboard = document.getElementById('content_dashboard');
        const content_users = document.getElementById('content_users');
        const content_partners = document.getElementById('content_partners');
        const content_transports = document.getElementById('content_transports');
        content_shown = content_dashboard;


        const show = (element) =>{
            element.classList.add('hidden');
            element.classList.remove('hidden');
            element.classList.add('unique');
        }
        const reset = () =>{
            content_users.classList.remove('unique', 'hidden');
            content_partners.classList.remove('unique','hidden');
            content_transports.classList.remove('unique','hidden');
            content_dashboard.classList.remove('unique','hidden');
            content_users.classList.add('hidden');
            content_partners.classList.add('hidden');
            content_transports.classList.add('hidden');
            content_dashboard.classList.add('hidden');
        }

        button_menu_toggle_dashboard.addEventListener('click', () => {
            reset();
            show(content_dashboard);
        });
        button_menu_toggle_users.addEventListener('click', () => {
            reset();
            show(content_users);
        });
        button_menu_toggle_partners.addEventListener('click', () => {
            reset();
            show(content_partners);
        });
        button_menu_toggle_transports.addEventListener('click', () => {
            reset();
            show(content_transports);
        });
    </script>
</x-app-layout>
