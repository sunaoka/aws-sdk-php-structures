<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateRoleDescription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $RoleName
 * @property string $RoleId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string|null $AssumeRolePolicyDocument
 * @property string|null $Description
 * @property int<3600, 43200>|null $MaxSessionDuration
 * @property AttachedPermissionsBoundary|null $PermissionsBoundary
 * @property list<Tag>|null $Tags
 * @property RoleLastUsed|null $RoleLastUsed
 */
class Role extends Shape
{
    /**
     * @param array{
     *     Path: string,
     *     RoleName: string,
     *     RoleId: string,
     *     Arn: string,
     *     CreateDate: \Aws\Api\DateTimeResult,
     *     AssumeRolePolicyDocument?: string|null,
     *     Description?: string|null,
     *     MaxSessionDuration?: int<3600, 43200>|null,
     *     PermissionsBoundary?: AttachedPermissionsBoundary|null,
     *     Tags?: list<Tag>|null,
     *     RoleLastUsed?: RoleLastUsed|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
