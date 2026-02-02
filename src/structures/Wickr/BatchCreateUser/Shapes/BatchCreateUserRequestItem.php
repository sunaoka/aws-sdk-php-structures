<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchCreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $firstName
 * @property string|null $lastName
 * @property list<string> $securityGroupIds
 * @property string $username
 * @property string|null $inviteCode
 * @property int|null $inviteCodeTtl
 * @property bool|null $codeValidation
 */
class BatchCreateUserRequestItem extends Shape
{
    /**
     * @param array{
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     securityGroupIds: list<string>,
     *     username: string,
     *     inviteCode?: string|null,
     *     inviteCodeTtl?: int|null,
     *     codeValidation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
