<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamPolicyId
 * @property string|null $IpamPolicyArn
 * @property string|null $IpamPolicyRegion
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property string|null $StateMessage
 * @property list<Tag>|null $Tags
 * @property string|null $IpamId
 */
class IpamPolicy extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamPolicyId?: string|null,
     *     IpamPolicyArn?: string|null,
     *     IpamPolicyRegion?: string|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     StateMessage?: string|null,
     *     Tags?: list<Tag>|null,
     *     IpamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
