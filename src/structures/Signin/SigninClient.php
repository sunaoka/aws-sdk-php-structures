<?php

namespace Sunaoka\Aws\Structures\Signin;

class SigninClient extends \Aws\Signin\SigninClient
{
    use BatchRevokeSessions\BatchRevokeSessionsTrait;
    use CreateBearerToken\CreateBearerTokenTrait;
    use CreateOAuth2Token\CreateOAuth2TokenTrait;
    use CreateOAuth2TokenWithIAM\CreateOAuth2TokenWithIAMTrait;
    use CreateOAuth2TokenWithTokenExchange\CreateOAuth2TokenWithTokenExchangeTrait;
    use DeleteConsoleAuthorizationConfiguration\DeleteConsoleAuthorizationConfigurationTrait;
    use DeleteResourcePermissionStatement\DeleteResourcePermissionStatementTrait;
    use GetConsoleAuthorizationConfiguration\GetConsoleAuthorizationConfigurationTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetSession\GetSessionTrait;
    use IntrospectOAuth2TokenWithIAM\IntrospectOAuth2TokenWithIAMTrait;
    use ListResourcePermissionStatements\ListResourcePermissionStatementsTrait;
    use ListSessions\ListSessionsTrait;
    use PutConsoleAuthorizationConfiguration\PutConsoleAuthorizationConfigurationTrait;
    use PutResourcePermissionStatement\PutResourcePermissionStatementTrait;
    use RevokeOAuth2TokenWithIAM\RevokeOAuth2TokenWithIAMTrait;
}
