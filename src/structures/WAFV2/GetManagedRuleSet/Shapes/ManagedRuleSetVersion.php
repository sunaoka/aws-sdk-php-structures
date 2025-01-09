<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetManagedRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociatedRuleGroupArn
 * @property int<1, max> $Capacity
 * @property int<1, max> $ForecastedLifetime
 * @property \Aws\Api\DateTimeResult $PublishTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult $ExpiryTimestamp
 */
class ManagedRuleSetVersion extends Shape
{
    /**
     * @param array{
     *     AssociatedRuleGroupArn?: string,
     *     Capacity?: int<1, max>,
     *     ForecastedLifetime?: int<1, max>,
     *     PublishTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     ExpiryTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
