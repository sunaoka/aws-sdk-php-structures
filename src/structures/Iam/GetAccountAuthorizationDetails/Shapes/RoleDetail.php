<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property string|null $RoleName
 * @property string|null $RoleId
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $AssumeRolePolicyDocument
 * @property list<InstanceProfile>|null $InstanceProfileList
 * @property list<PolicyDetail>|null $RolePolicyList
 * @property list<AttachedPolicy>|null $AttachedManagedPolicies
 * @property AttachedPermissionsBoundary|null $PermissionsBoundary
 * @property list<Tag>|null $Tags
 * @property RoleLastUsed|null $RoleLastUsed
 */
class RoleDetail extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     RoleName?: string|null,
     *     RoleId?: string|null,
     *     Arn?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     AssumeRolePolicyDocument?: string|null,
     *     InstanceProfileList?: list<InstanceProfile>|null,
     *     RolePolicyList?: list<PolicyDetail>|null,
     *     AttachedManagedPolicies?: list<AttachedPolicy>|null,
     *     PermissionsBoundary?: AttachedPermissionsBoundary|null,
     *     Tags?: list<Tag>|null,
     *     RoleLastUsed?: RoleLastUsed|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
