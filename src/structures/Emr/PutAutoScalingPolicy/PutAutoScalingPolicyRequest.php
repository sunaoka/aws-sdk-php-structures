<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $InstanceGroupId
 * @property Shapes\AutoScalingPolicy $AutoScalingPolicy
 */
class PutAutoScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     InstanceGroupId: string,
     *     AutoScalingPolicy: Shapes\AutoScalingPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
