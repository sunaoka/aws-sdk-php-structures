<?php

namespace Sunaoka\Aws\Structures\Signin;

class SigninClient extends \Aws\Signin\SigninClient
{
    use CreateOAuth2Token\CreateOAuth2TokenTrait;
    use DeleteConsoleAuthorizationConfiguration\DeleteConsoleAuthorizationConfigurationTrait;
    use DeleteResourcePermissionStatement\DeleteResourcePermissionStatementTrait;
    use GetConsoleAuthorizationConfiguration\GetConsoleAuthorizationConfigurationTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListResourcePermissionStatements\ListResourcePermissionStatementsTrait;
    use PutConsoleAuthorizationConfiguration\PutConsoleAuthorizationConfigurationTrait;
    use PutResourcePermissionStatement\PutResourcePermissionStatementTrait;
}
