<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsIamAttachedManagedPolicy> $AttachedManagedPolicies
 * @property string $CreateDate
 * @property list<string> $GroupList
 * @property string $Path
 * @property AwsIamPermissionsBoundary $PermissionsBoundary
 * @property string $UserId
 * @property string $UserName
 * @property list<AwsIamUserPolicy> $UserPolicyList
 */
class AwsIamUserDetails extends Shape
{
    /**
     * @param array{
     *     AttachedManagedPolicies?: list<AwsIamAttachedManagedPolicy>,
     *     CreateDate?: string,
     *     GroupList?: list<string>,
     *     Path?: string,
     *     PermissionsBoundary?: AwsIamPermissionsBoundary,
     *     UserId?: string,
     *     UserName?: string,
     *     UserPolicyList?: list<AwsIamUserPolicy>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
