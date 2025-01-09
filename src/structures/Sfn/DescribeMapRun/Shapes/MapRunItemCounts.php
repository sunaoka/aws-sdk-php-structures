<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeMapRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $pending
 * @property int $running
 * @property int $succeeded
 * @property int $failed
 * @property int $timedOut
 * @property int $aborted
 * @property int $total
 * @property int $resultsWritten
 * @property int $failuresNotRedrivable
 * @property int $pendingRedrive
 */
class MapRunItemCounts extends Shape
{
    /**
     * @param array{
     *     pending: int,
     *     running: int,
     *     succeeded: int,
     *     failed: int,
     *     timedOut: int,
     *     aborted: int,
     *     total: int,
     *     resultsWritten: int,
     *     failuresNotRedrivable?: int,
     *     pendingRedrive?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
