<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FullLoadProgressPercent
 * @property int $ElapsedTimeMillis
 * @property int $TablesLoaded
 * @property int $TablesLoading
 * @property int $TablesQueued
 * @property int $TablesErrored
 * @property \Aws\Api\DateTimeResult $FreshStartDate
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $StopDate
 * @property \Aws\Api\DateTimeResult $FullLoadStartDate
 * @property \Aws\Api\DateTimeResult $FullLoadFinishDate
 */
class ReplicationTaskStats extends Shape
{
    /**
     * @param array{
     *     FullLoadProgressPercent?: int,
     *     ElapsedTimeMillis?: int,
     *     TablesLoaded?: int,
     *     TablesLoading?: int,
     *     TablesQueued?: int,
     *     TablesErrored?: int,
     *     FreshStartDate?: \Aws\Api\DateTimeResult,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     StopDate?: \Aws\Api\DateTimeResult,
     *     FullLoadStartDate?: \Aws\Api\DateTimeResult,
     *     FullLoadFinishDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
