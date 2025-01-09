<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON_DEMAND'|'SPOT' $Market
 * @property SimpleScalingPolicyConfiguration $SimpleScalingPolicyConfiguration
 */
class ScalingAction extends Shape
{
    /**
     * @param array{
     *     Market?: 'ON_DEMAND'|'SPOT',
     *     SimpleScalingPolicyConfiguration: SimpleScalingPolicyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
