<?php

namespace Sunaoka\Aws\Structures\Iam\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $UserName
 * @property string $UserId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult $PasswordLastUsed
 * @property AttachedPermissionsBoundary $PermissionsBoundary
 * @property list<Tag> $Tags
 */
class User extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     UserName: string,
     *     UserId: string,
     *     Arn: string,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     PasswordLastUsed?: \Aws\Api\DateTimeResult,
     *     PermissionsBoundary?: AttachedPermissionsBoundary,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
