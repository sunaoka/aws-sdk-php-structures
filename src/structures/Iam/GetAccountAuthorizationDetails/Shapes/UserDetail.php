<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property string|null $UserName
 * @property string|null $UserId
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property list<PolicyDetail>|null $UserPolicyList
 * @property list<string>|null $GroupList
 * @property list<AttachedPolicy>|null $AttachedManagedPolicies
 * @property AttachedPermissionsBoundary|null $PermissionsBoundary
 * @property list<Tag>|null $Tags
 */
class UserDetail extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     UserName?: string|null,
     *     UserId?: string|null,
     *     Arn?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     UserPolicyList?: list<PolicyDetail>|null,
     *     GroupList?: list<string>|null,
     *     AttachedManagedPolicies?: list<AttachedPolicy>|null,
     *     PermissionsBoundary?: AttachedPermissionsBoundary|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
