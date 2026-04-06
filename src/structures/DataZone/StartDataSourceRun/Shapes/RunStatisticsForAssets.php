<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $added
 * @property int|null $updated
 * @property int|null $unchanged
 * @property int|null $skipped
 * @property int|null $failed
 */
class RunStatisticsForAssets extends Shape
{
    /**
     * @param array{
     *     added?: int|null,
     *     updated?: int|null,
     *     unchanged?: int|null,
     *     skipped?: int|null,
     *     failed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
