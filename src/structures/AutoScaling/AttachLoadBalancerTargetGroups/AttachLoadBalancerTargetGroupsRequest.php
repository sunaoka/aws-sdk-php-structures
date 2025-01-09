<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachLoadBalancerTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $TargetGroupARNs
 */
class AttachLoadBalancerTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TargetGroupARNs: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
