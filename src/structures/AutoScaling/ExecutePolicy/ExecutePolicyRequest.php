<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ExecutePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AutoScalingGroupName
 * @property string $PolicyName
 * @property bool|null $HonorCooldown
 * @property double|null $MetricValue
 * @property double|null $BreachThreshold
 */
class ExecutePolicyRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     PolicyName: string,
     *     HonorCooldown?: bool|null,
     *     MetricValue?: double|null,
     *     BreachThreshold?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
