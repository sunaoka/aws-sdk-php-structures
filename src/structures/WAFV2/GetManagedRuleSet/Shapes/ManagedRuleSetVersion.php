<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetManagedRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociatedRuleGroupArn
 * @property int<1, max>|null $Capacity
 * @property int<1, max>|null $ForecastedLifetime
 * @property \Aws\Api\DateTimeResult|null $PublishTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult|null $ExpiryTimestamp
 */
class ManagedRuleSetVersion extends Shape
{
    /**
     * @param array{
     *     AssociatedRuleGroupArn?: string|null,
     *     Capacity?: int<1, max>|null,
     *     ForecastedLifetime?: int<1, max>|null,
     *     PublishTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ExpiryTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
