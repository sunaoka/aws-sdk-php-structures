<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSourceRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $added
 * @property int|null $failed
 * @property int|null $skipped
 * @property int|null $unchanged
 * @property int|null $updated
 */
class RunStatisticsForAssets extends Shape
{
    /**
     * @param array{
     *     added?: int|null,
     *     failed?: int|null,
     *     skipped?: int|null,
     *     unchanged?: int|null,
     *     updated?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
