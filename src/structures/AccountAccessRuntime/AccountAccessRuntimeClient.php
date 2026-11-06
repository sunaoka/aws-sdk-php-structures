<?php

namespace Sunaoka\Aws\Structures\AccountAccessRuntime;

class AccountAccessRuntimeClient extends \Aws\AccountAccessRuntime\AccountAccessRuntimeClient
{
    use GetRoleCredentials\GetRoleCredentialsTrait;
    use ListRoles\ListRolesTrait;
}
