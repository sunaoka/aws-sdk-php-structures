<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV' $type
 * @property int $maxCount
 * @property int $remainingCount
 */
class DifferentialPrivacyPrivacyBudgetAggregation extends Shape
{
    /**
     * @param array{
     *     type: 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV',
     *     maxCount: int,
     *     remainingCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
