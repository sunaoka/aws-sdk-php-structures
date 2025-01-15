<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $emailAddress
 * @property 'SUPER_USER'|'APP_USER' $type
 * @property string|null $firstName
 * @property string|null $lastName
 * @property 'ENABLED'|'DISABLED'|null $apiAccess
 * @property string|null $apiAccessPrincipalArn
 * @property string|null $clientToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     emailAddress: string,
     *     type: 'SUPER_USER'|'APP_USER',
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     apiAccess?: 'ENABLED'|'DISABLED'|null,
     *     apiAccessPrincipalArn?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
