<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOWNGRADE'|'CANCELLATION' $changeType
 * @property \Aws\Api\DateTimeResult|null $effectiveDate
 * @property string|null $planTier
 * @property string|null $usageLevel
 */
class ScheduledChange extends Shape
{
    /**
     * @param array{
     *     changeType: 'DOWNGRADE'|'CANCELLATION',
     *     effectiveDate?: \Aws\Api\DateTimeResult|null,
     *     planTier?: string|null,
     *     usageLevel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
