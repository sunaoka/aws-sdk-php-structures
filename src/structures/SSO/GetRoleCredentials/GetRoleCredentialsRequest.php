<?php

namespace Sunaoka\Aws\Structures\SSO\GetRoleCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleName
 * @property string $accountId
 * @property string $accessToken
 */
class GetRoleCredentialsRequest extends Request
{
    /**
     * @param array{
     *     roleName: string,
     *     accountId: string,
     *     accessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
