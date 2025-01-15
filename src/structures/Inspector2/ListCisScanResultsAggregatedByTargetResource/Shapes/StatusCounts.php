<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $failed
 * @property int|null $passed
 * @property int|null $skipped
 */
class StatusCounts extends Shape
{
    /**
     * @param array{
     *     failed?: int|null,
     *     passed?: int|null,
     *     skipped?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
