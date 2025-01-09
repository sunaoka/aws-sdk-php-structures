<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssumeRolePolicyDocument
 * @property list<AwsIamAttachedManagedPolicy> $AttachedManagedPolicies
 * @property string $CreateDate
 * @property list<AwsIamInstanceProfile> $InstanceProfileList
 * @property AwsIamPermissionsBoundary $PermissionsBoundary
 * @property string $RoleId
 * @property string $RoleName
 * @property list<AwsIamRolePolicy> $RolePolicyList
 * @property int $MaxSessionDuration
 * @property string $Path
 */
class AwsIamRoleDetails extends Shape
{
    /**
     * @param array{
     *     AssumeRolePolicyDocument?: string,
     *     AttachedManagedPolicies?: list<AwsIamAttachedManagedPolicy>,
     *     CreateDate?: string,
     *     InstanceProfileList?: list<AwsIamInstanceProfile>,
     *     PermissionsBoundary?: AwsIamPermissionsBoundary,
     *     RoleId?: string,
     *     RoleName?: string,
     *     RolePolicyList?: list<AwsIamRolePolicy>,
     *     MaxSessionDuration?: int,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
