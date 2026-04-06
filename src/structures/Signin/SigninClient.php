<?php

namespace Sunaoka\Aws\Structures\Signin;

class SigninClient extends \Aws\Signin\SigninClient
{
    use CreateOAuth2Token\CreateOAuth2TokenTrait;
}
