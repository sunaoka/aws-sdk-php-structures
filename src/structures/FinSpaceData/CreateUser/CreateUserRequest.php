<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $emailAddress
 * @property 'SUPER_USER'|'APP_USER' $type
 * @property string $firstName
 * @property string $lastName
 * @property 'ENABLED'|'DISABLED' $apiAccess
 * @property string $apiAccessPrincipalArn
 * @property string $clientToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     emailAddress: string,
     *     type: 'SUPER_USER'|'APP_USER',
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
