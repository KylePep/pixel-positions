<x-layout>
  <x-page-heading>Login</x-page-heading>
  <x-forms.form method="POST" action="/login">
    <x-forms.input label="Email" name="email" typ="email" />
    <x-forms.input label="Password" name="password" typ="password" />

    <x-forms.button>Log In</x-forms.button>
  </x-forms.form>
</x-layout>