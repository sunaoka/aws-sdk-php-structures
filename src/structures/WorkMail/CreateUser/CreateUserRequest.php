<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Name
 * @property string $DisplayName
 * @property string|null $Password
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null $Role
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property bool|null $HiddenFromGlobalAddressList
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Name: string,
     *     DisplayName: string,
     *     Password?: string|null,
     *     Role?: 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     HiddenFromGlobalAddressList?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
