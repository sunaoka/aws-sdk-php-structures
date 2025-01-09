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
 * @property list<InstanceProfile> $InstanceProfileList
 * @property list<PolicyDetail> $RolePolicyList
 * @property list<AttachedPolicy> $AttachedManagedPolicies
 * @property AttachedPermissionsBoundary $PermissionsBoundary
 * @property list<Tag> $Tags
 * @property RoleLastUsed $RoleLastUsed
 */
class RoleDetail extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     RoleName?: string,
     *     RoleId?: string,
     *     Arn?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     AssumeRolePolicyDocument?: string,
     *     InstanceProfileList?: list<InstanceProfile>,
     *     RolePolicyList?: list<PolicyDetail>,
     *     AttachedManagedPolicies?: list<AttachedPolicy>,
     *     PermissionsBoundary?: AttachedPermissionsBoundary,
     *     Tags?: list<Tag>,
     *     RoleLastUsed?: RoleLastUsed
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
