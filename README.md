# simplesamlphp-modules-blank

This is a "simple" SimpleSAMLphp module to quickly allow an IdP to pass data
back to the SP. Can be used in automation to test Authprocs or some other
reasons that I can't come up with right now.

# Installation

Copy files to your modules folder in your SimpleSAMLphp installation. By default
this module is enabled out of the box.

# Configuration

You'll need to set up an authsource to use this in config/authsources.php

```
'blankPage' => [
    'blank:Page',
],
```

If you set up a SAML IdP in metadata/saml20-idp-hosted.php, set your auth:

```
$metadata['https://somewhere/saml/saml2/idp/metadata.php'] = [
    'auth' => 'blankPage',
    'certificate' => 'idp.crt',
    'privatekey' => 'idp.pem',
    'name' => 'awesome-idp',
    'entityid' => 'https://somewhere/saml/saml2/idp/metadata.php',
];
```

And that's all you should need to set this up.

# Links

https://simplesamlphp.org/
https://github.com/simplesamlphp/simplesamlphp
