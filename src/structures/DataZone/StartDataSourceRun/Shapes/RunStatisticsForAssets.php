<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $added
 * @property int $failed
 * @property int $skipped
 * @property int $unchanged
 * @property int $updated
 */
class RunStatisticsForAssets extends Shape
{
    /**
     * @param array{
     *     added?: int,
     *     failed?: int,
     *     skipped?: int,
     *     unchanged?: int,
     *     updated?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
