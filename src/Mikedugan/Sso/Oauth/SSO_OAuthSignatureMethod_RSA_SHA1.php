<?php  namespace Sso\Oauth;

class SSO_OAuthSignatureMethod_RSA_SHA1 extends OAuthSignatureMethod_RSA_SHA1 {
    private $cert = false;

    public function __construct($cert){
        $this->cert = $cert;
    }

    public function fetch_private_cert(&$request) {
        return $this->cert;
    }
} 
