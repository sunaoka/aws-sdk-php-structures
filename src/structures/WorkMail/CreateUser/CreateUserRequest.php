<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Name
 * @property string $DisplayName
 * @property string $Password
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER' $Role
 * @property string $FirstName
 * @property string $LastName
 * @property bool $HiddenFromGlobalAddressList
 * @property string $IdentityProviderUserId
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Name: string,
     *     DisplayName: string,
     *     Password?: string,
     *     Role?: 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER',
     *     FirstName?: string,
     *     LastName?: string,
     *     HiddenFromGlobalAddressList?: bool,
     *     IdentityProviderUserId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
