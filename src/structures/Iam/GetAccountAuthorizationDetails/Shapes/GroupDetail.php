<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountAuthorizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property string $GroupName
 * @property string $GroupId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<PolicyDetail> $GroupPolicyList
 * @property list<AttachedPolicy> $AttachedManagedPolicies
 */
class GroupDetail extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     GroupName?: string,
     *     GroupId?: string,
     *     Arn?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     GroupPolicyList?: list<PolicyDetail>,
     *     AttachedManagedPolicies?: list<AttachedPolicy>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
