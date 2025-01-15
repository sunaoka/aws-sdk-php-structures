<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property 'SUPER_USER'|'APP_USER'|null $type
 * @property string|null $firstName
 * @property string|null $lastName
 * @property 'ENABLED'|'DISABLED'|null $apiAccess
 * @property string|null $apiAccessPrincipalArn
 * @property string|null $clientToken
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     type?: 'SUPER_USER'|'APP_USER'|null,
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
