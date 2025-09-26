<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DimensionValues|null $dimensions
 * @property TagValues|null $tags
 * @property TimeRange|null $timeRange
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     dimensions?: DimensionValues|null,
     *     tags?: TagValues|null,
     *     timeRange?: TimeRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
