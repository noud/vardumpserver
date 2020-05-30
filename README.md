# VarDumpServer

## Usage
```
composer install
```
Add vendor path to path variable:
```
export PATH="./vendor/bin:$PATH"
```
Set dumper server variable:
```
export VAR_DUMPER_SERVER="127.0.0.1:9913"
```
Check variables are set:
```
echo $PATH
echo $VAR_DUMPER_SERVER
```

Start server:
```
var-dump-server
```

Start server and output to external file:
```
var-dump-server --format="html" > dump.html
```