<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssumeRolePolicyDocument
 * @property list<AwsIamAttachedManagedPolicy>|null $AttachedManagedPolicies
 * @property string|null $CreateDate
 * @property list<AwsIamInstanceProfile>|null $InstanceProfileList
 * @property AwsIamPermissionsBoundary|null $PermissionsBoundary
 * @property string|null $RoleId
 * @property string|null $RoleName
 * @property list<AwsIamRolePolicy>|null $RolePolicyList
 * @property int|null $MaxSessionDuration
 * @property string|null $Path
 */
class AwsIamRoleDetails extends Shape
{
    /**
     * @param array{
     *     AssumeRolePolicyDocument?: string|null,
     *     AttachedManagedPolicies?: list<AwsIamAttachedManagedPolicy>|null,
     *     CreateDate?: string|null,
     *     InstanceProfileList?: list<AwsIamInstanceProfile>|null,
     *     PermissionsBoundary?: AwsIamPermissionsBoundary|null,
     *     RoleId?: string|null,
     *     RoleName?: string|null,
     *     RolePolicyList?: list<AwsIamRolePolicy>|null,
     *     MaxSessionDuration?: int|null,
     *     Path?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
