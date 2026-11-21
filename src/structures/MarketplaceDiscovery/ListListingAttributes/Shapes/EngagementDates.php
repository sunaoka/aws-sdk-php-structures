<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult|null $completionDate
 */
class EngagementDates extends Shape
{
    /**
     * @param array{
     *     startDate: \Aws\Api\DateTimeResult,
     *     completionDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
