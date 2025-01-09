<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveAutoScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $InstanceGroupId
 */
class RemoveAutoScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     InstanceGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
