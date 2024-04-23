### Select2 CDN
```html
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
```
### JQuery CDN
```html
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
```


### Basic Usage (Multi-select boxes)
```html
<select class="js-example-basic-multiple" name="states[]" multiple="multiple">
    <option value="AL">Alabama</option>
    ...
    <option value="WY">Wyoming</option>
</select>
```

```javascript
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
```

### Configuration
To configure custom options when you initialize Select2, simply pass an object in your call to .select2():
```javascript
$('.js-example-basic-single').select2({
placeholder: 'Select an option'
});
```

