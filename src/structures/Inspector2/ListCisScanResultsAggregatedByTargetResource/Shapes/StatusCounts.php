<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $failed
 * @property int|null $skipped
 * @property int|null $passed
 */
class StatusCounts extends Shape
{
    /**
     * @param array{
     *     failed?: int|null,
     *     skipped?: int|null,
     *     passed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
