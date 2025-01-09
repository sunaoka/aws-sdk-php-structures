<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ExecutePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $PolicyName
 * @property bool $HonorCooldown
 * @property double $MetricValue
 * @property double $BreachThreshold
 */
class ExecutePolicyRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string,
     *     PolicyName: string,
     *     HonorCooldown?: bool,
     *     MetricValue?: double,
     *     BreachThreshold?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
