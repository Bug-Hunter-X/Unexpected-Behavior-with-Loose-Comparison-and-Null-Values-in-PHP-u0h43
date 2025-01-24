```php
function foo($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values explicitly
  }

  // ... rest of your function logic ...
}

$result = foo(1, null); // This will now return null
```