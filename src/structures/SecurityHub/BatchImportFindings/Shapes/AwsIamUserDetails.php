<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsIamAttachedManagedPolicy>|null $AttachedManagedPolicies
 * @property string|null $CreateDate
 * @property list<string>|null $GroupList
 * @property string|null $Path
 * @property AwsIamPermissionsBoundary|null $PermissionsBoundary
 * @property string|null $UserId
 * @property string|null $UserName
 * @property list<AwsIamUserPolicy>|null $UserPolicyList
 */
class AwsIamUserDetails extends Shape
{
    /**
     * @param array{
     *     AttachedManagedPolicies?: list<AwsIamAttachedManagedPolicy>|null,
     *     CreateDate?: string|null,
     *     GroupList?: list<string>|null,
     *     Path?: string|null,
     *     PermissionsBoundary?: AwsIamPermissionsBoundary|null,
     *     UserId?: string|null,
     *     UserName?: string|null,
     *     UserPolicyList?: list<AwsIamUserPolicy>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
