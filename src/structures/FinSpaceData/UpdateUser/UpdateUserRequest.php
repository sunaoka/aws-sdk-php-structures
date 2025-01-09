<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property 'SUPER_USER'|'APP_USER' $type
 * @property string $firstName
 * @property string $lastName
 * @property 'ENABLED'|'DISABLED' $apiAccess
 * @property string $apiAccessPrincipalArn
 * @property string $clientToken
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     type?: 'SUPER_USER'|'APP_USER',
     *     firstName?: string,
     *     lastName?: string,
     *     apiAccess?: 'ENABLED'|'DISABLED',
     *     apiAccessPrincipalArn?: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
