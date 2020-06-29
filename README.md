# Tanım

Bu component, kod tekrarını önlemek, okunabilirliği arttırmak ve form elementlerini daha kolay yazmak için hazırlanmıştır. Kodların yapısı Bootstrap kütüphanesine göre yazılmıştır, kendinize göre düzenleyebilirsiniz.

# Input

```
@component('form.element')
    @slot('type', 'text')
    @slot('name', 'input-name')
    @slot('label', 'Başlık')
    @slot('description', 'Yardımcı açıklama')
    @slot('attributes', ['required' => true, 'placeholder' => 'foo bar'])
    @slot('value', 'varsayılan input değeri')
@endcomponent
```

**@slot('type')**

Kullanılabilir tipler: text, email, password, textarea, file, select

**@slot('name')**

Bu slot, inputun **name=""** değerini tanımlayacaktır. Ayrıca **id=""** değeri de buna göre şekillenir.

**@slot('label') ve @slot('description')**

Input başlığı ve yardımcı açıklamasını tanımlamak için kullanılır.

**@slot('attributes')**

Input'a ekstra olarak eklemek istediğiniz attribute ları buradan tanımlayabilirsiniz.

**@slot('value')**

Buraya yazdığımız değer inputun varsayılan değeri olacaktır. Bu değer değiştirilip form submit edilirse **old()** methodu devreye girecek ve son yazılan değer kalacaktır.


Ayrıca bir "validation" hatası varsa hatayı otomatik olarak inputun altına yazacaktır.

# Select

Select elementini kullanırken ekstradan bir slot daha kullanırız.

```
@component('form.element')
    @slot('type', 'select')
    @slot('name', 'city')
    @slot('label', 'Şehir')
    @slot('description', 'Sevdiğiniz şehirleri seçin')
    @slot('attributes', ['required' => true, 'multiple' => true])
    @slot('options', ['01' => 'Adana', '34' => 'İstanbul'])
    @slot('value', '01')
@endcomponent
```

Selectimiz multiple ise, birden fazla öğe seçmek için "value" slotuna array değer girebiliriz.

----

Gözünüze çarpan bir hata olursa lütfen katkıda bulunun, teşekkürler!