#Kappa:Texy helper

Extension for texy implementation of a configuration option config files

###Requirements:
- PHP 5.3.*
- [Nette framework](http://nette.org/) 2.0.*
- [Kappa:Framework](https://github.com/Kappa-org/Framework)

###Install

1. Step - Add this package into your project
```json
	"require":{
		"kappa/texy-helper" : "dev-master"
	}
```

2. Step - Registre this package in config
```neon
	parameters:
		Texy:
			headingModule:
				top: 5

	nette:
		template:
			helperLoaders: \Kappa\Templating\Helpers
			helpers:
				texy: @Texy::process
	services:
		Texy: Kappa\Templating\Helpers\TexyHelper(%Texy%)
```

**3. Step - Clean temp directory!**

Complete! :)