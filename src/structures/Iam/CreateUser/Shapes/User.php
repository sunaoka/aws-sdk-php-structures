<?php

namespace Sunaoka\Aws\Structures\Iam\CreateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $UserName
 * @property string $UserId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property \Aws\Api\DateTimeResult|null $PasswordLastUsed
 * @property AttachedPermissionsBoundary|null $PermissionsBoundary
 * @property list<Tag>|null $Tags
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
     *     PasswordLastUsed?: \Aws\Api\DateTimeResult|null,
     *     PermissionsBoundary?: AttachedPermissionsBoundary|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
