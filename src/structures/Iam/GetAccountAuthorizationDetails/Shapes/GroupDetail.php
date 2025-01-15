<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property string|null $GroupName
 * @property string|null $GroupId
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property list<PolicyDetail>|null $GroupPolicyList
 * @property list<AttachedPolicy>|null $AttachedManagedPolicies
 */
class GroupDetail extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     GroupName?: string|null,
     *     GroupId?: string|null,
     *     Arn?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     GroupPolicyList?: list<PolicyDetail>|null,
     *     AttachedManagedPolicies?: list<AttachedPolicy>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
