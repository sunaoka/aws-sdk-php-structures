<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV' $type
 * @property int<0, max> $maxCount
 * @property int<0, max> $remainingCount
 */
class DifferentialPrivacyPrivacyBudgetAggregation extends Shape
{
    /**
     * @param array{
     *     type: 'AVG'|'COUNT'|'COUNT_DISTINCT'|'SUM'|'STDDEV',
     *     maxCount: int<0, max>,
     *     remainingCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
