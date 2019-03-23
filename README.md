# PHPDataClass
PHP useful data class

## Normalize String
Snake-case or kebab-case to ucwords (uppercase first letters)

```PHP
$data = new Data();
$columnName = 'user_rating';
echo $data->normalizeString($columnName); // output: User Rating
```

## Array to HTML \<table\>
Converts multiple items/rows (or single item/row) selected from the database into an HTML table. (supported language system)

```PHP
$data = new Data();
$table = $data->arrayToTable($this->model->getData());

$this->result['table'] = $table ? $table : 'data not found';
```