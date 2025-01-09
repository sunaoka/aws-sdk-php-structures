<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $RoleName
 * @property string $RoleId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $AssumeRolePolicyDocument
 * @property string $Description
 * @property int<3600, 43200> $MaxSessionDuration
 * @property AttachedPermissionsBoundary $PermissionsBoundary
 * @property list<Tag> $Tags
 * @property RoleLastUsed $RoleLastUsed
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
     *     AssumeRolePolicyDocument?: string,
     *     Description?: string,
     *     MaxSessionDuration?: int<3600, 43200>,
     *     PermissionsBoundary?: AttachedPermissionsBoundary,
     *     Tags?: list<Tag>,
     *     RoleLastUsed?: RoleLastUsed
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
