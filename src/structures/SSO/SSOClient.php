<?php

namespace Sunaoka\Aws\Structures\SSO;

class SSOClient extends \Aws\SSO\SSOClient
{
    use GetRoleCredentials\GetRoleCredentialsTrait;
    use ListAccountRoles\ListAccountRolesTrait;
    use ListAccounts\ListAccountsTrait;
    use Logout\LogoutTrait;
}
