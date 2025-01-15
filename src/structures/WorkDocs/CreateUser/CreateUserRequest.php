<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OrganizationId
 * @property string $Username
 * @property string|null $EmailAddress
 * @property string $GivenName
 * @property string $Surname
 * @property string $Password
 * @property string|null $TimeZoneId
 * @property Shapes\StorageRuleType|null $StorageRule
 * @property string|null $AuthenticationToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId?: string|null,
     *     Username: string,
     *     EmailAddress?: string|null,
     *     GivenName: string,
     *     Surname: string,
     *     Password: string,
     *     TimeZoneId?: string|null,
     *     StorageRule?: Shapes\StorageRuleType|null,
     *     AuthenticationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
