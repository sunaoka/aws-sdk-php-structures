<?php

namespace Sunaoka\Aws\Structures\Signin;

class SigninClient extends \Aws\Signin\SigninClient
{
    use CreateOAuth2Token\CreateOAuth2TokenTrait;
    use CreateOAuth2TokenWithIAM\CreateOAuth2TokenWithIAMTrait;
    use DeleteConsoleAuthorizationConfiguration\DeleteConsoleAuthorizationConfigurationTrait;
    use DeleteResourcePermissionStatement\DeleteResourcePermissionStatementTrait;
    use GetConsoleAuthorizationConfiguration\GetConsoleAuthorizationConfigurationTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use IntrospectOAuth2TokenWithIAM\IntrospectOAuth2TokenWithIAMTrait;
    use ListResourcePermissionStatements\ListResourcePermissionStatementsTrait;
    use PutConsoleAuthorizationConfiguration\PutConsoleAuthorizationConfigurationTrait;
    use PutResourcePermissionStatement\PutResourcePermissionStatementTrait;
    use RevokeOAuth2TokenWithIAM\RevokeOAuth2TokenWithIAMTrait;
}
