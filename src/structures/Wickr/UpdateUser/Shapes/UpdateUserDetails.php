<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $username
 * @property list<string>|null $securityGroupIds
 * @property string|null $inviteCode
 * @property int|null $inviteCodeTtl
 * @property bool|null $codeValidation
 */
class UpdateUserDetails extends Shape
{
    /**
     * @param array{
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     username?: string|null,
     *     securityGroupIds?: list<string>|null,
     *     inviteCode?: string|null,
     *     inviteCodeTtl?: int|null,
     *     codeValidation?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
