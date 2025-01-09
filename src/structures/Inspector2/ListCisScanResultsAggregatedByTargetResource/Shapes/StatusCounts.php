<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $failed
 * @property int $passed
 * @property int $skipped
 */
class StatusCounts extends Shape
{
    /**
     * @param array{
     *     failed?: int,
     *     passed?: int,
     *     skipped?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
