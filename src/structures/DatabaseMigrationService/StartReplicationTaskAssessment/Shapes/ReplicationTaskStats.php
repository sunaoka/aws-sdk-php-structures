<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartReplicationTaskAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FullLoadProgressPercent
 * @property int|null $ElapsedTimeMillis
 * @property int|null $TablesLoaded
 * @property int|null $TablesLoading
 * @property int|null $TablesQueued
 * @property int|null $TablesErrored
 * @property \Aws\Api\DateTimeResult|null $FreshStartDate
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $StopDate
 * @property \Aws\Api\DateTimeResult|null $FullLoadStartDate
 * @property \Aws\Api\DateTimeResult|null $FullLoadFinishDate
 */
class ReplicationTaskStats extends Shape
{
    /**
     * @param array{
     *     FullLoadProgressPercent?: int|null,
     *     ElapsedTimeMillis?: int|null,
     *     TablesLoaded?: int|null,
     *     TablesLoading?: int|null,
     *     TablesQueued?: int|null,
     *     TablesErrored?: int|null,
     *     FreshStartDate?: \Aws\Api\DateTimeResult|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     StopDate?: \Aws\Api\DateTimeResult|null,
     *     FullLoadStartDate?: \Aws\Api\DateTimeResult|null,
     *     FullLoadFinishDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
