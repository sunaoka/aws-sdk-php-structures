<?php

namespace Sunaoka\Aws\Structures\Omics\GetBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $pendingRunCount
 * @property int|null $startingRunCount
 * @property int|null $runningRunCount
 * @property int|null $stoppingRunCount
 * @property int|null $completedRunCount
 * @property int|null $deletedRunCount
 * @property int|null $failedRunCount
 * @property int|null $cancelledRunCount
 */
class RunSummary extends Shape
{
    /**
     * @param array{
     *     pendingRunCount?: int|null,
     *     startingRunCount?: int|null,
     *     runningRunCount?: int|null,
     *     stoppingRunCount?: int|null,
     *     completedRunCount?: int|null,
     *     deletedRunCount?: int|null,
     *     failedRunCount?: int|null,
     *     cancelledRunCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
