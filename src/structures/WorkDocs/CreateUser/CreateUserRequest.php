<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Username
 * @property string $EmailAddress
 * @property string $GivenName
 * @property string $Surname
 * @property string $Password
 * @property string $TimeZoneId
 * @property Shapes\StorageRuleType $StorageRule
 * @property string $AuthenticationToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId?: string,
     *     Username: string,
     *     EmailAddress?: string,
     *     GivenName: string,
     *     Surname: string,
     *     Password: string,
     *     TimeZoneId?: string,
     *     StorageRule?: Shapes\StorageRuleType,
     *     AuthenticationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
