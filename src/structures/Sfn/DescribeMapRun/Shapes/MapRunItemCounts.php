<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeMapRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $pending
 * @property int<0, max> $running
 * @property int<0, max> $succeeded
 * @property int<0, max> $failed
 * @property int<0, max> $timedOut
 * @property int<0, max> $aborted
 * @property int<0, max> $total
 * @property int<0, max> $resultsWritten
 * @property int|null $failuresNotRedrivable
 * @property int|null $pendingRedrive
 */
class MapRunItemCounts extends Shape
{
    /**
     * @param array{
     *     pending: int<0, max>,
     *     running: int<0, max>,
     *     succeeded: int<0, max>,
     *     failed: int<0, max>,
     *     timedOut: int<0, max>,
     *     aborted: int<0, max>,
     *     total: int<0, max>,
     *     resultsWritten: int<0, max>,
     *     failuresNotRedrivable?: int|null,
     *     pendingRedrive?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
