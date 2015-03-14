.PHONY: eunit

eunit:
	php5 test-good-simple.php
	php5 test-good-3dparty.php
	php5 test-bad.php
