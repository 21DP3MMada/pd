# Kas ir API?

API jeb Application Programming Interface ir interfeiss, kas ļauj programmām sazināties savā starpā. Tas definē kopu ar metodēm, ko var izsaukt, lai piekļūtu datiem vai funkcionalitātei no citas programmas.

# Kā deklarēt mainīgo PHP valodā?

PHP valodā mainīgos var deklarēt, izmantojot $ simbolu un mainīgā nosaukumu.

```
$name = "Maigonis";
```

# Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:

Laravel izmanto MVC (Model-View-Controller) arhitektūru.

*Modelis* definē datu struktūru un loģiku.
*Skats* definē lietotāja interfeisu.
*Kontrolleris* apstrādā pieprasījumus no lietotāja un mijiedarbojas ar modeli un skatu.

# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

ORM (Object Relational Mapping) ir programmēšanas tehnika, kas mijiedarbojas ar datu bāzi, izmantojot objektorientētas programmēšanas koncepcijas, nerakstot neapstrādātus SQL vaicājumus.

```
$users = User::where('rating', '>', 4)->get();
```