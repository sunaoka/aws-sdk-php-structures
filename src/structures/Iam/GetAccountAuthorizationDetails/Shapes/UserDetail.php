<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $UserName
 * @property string $UserId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<PolicyDetail> $UserPolicyList
 * @property list<string> $GroupList
 * @property list<AttachedPolicy> $AttachedManagedPolicies
 * @property AttachedPermissionsBoundary $PermissionsBoundary
 * @property list<Tag> $Tags
 */
class UserDetail extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     UserName?: string,
     *     UserId?: string,
     *     Arn?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     UserPolicyList?: list<PolicyDetail>,
     *     GroupList?: list<string>,
     *     AttachedManagedPolicies?: list<AttachedPolicy>,
     *     PermissionsBoundary?: AttachedPermissionsBoundary,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
