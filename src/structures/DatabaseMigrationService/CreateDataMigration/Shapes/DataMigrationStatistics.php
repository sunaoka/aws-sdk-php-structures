<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TablesLoaded
 * @property int $ElapsedTimeMillis
 * @property int $TablesLoading
 * @property int $FullLoadPercentage
 * @property int $CDCLatency
 * @property int $TablesQueued
 * @property int $TablesErrored
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $StopTime
 */
class DataMigrationStatistics extends Shape
{
    /**
     * @param array{
     *     TablesLoaded?: int,
     *     ElapsedTimeMillis?: int,
     *     TablesLoading?: int,
     *     FullLoadPercentage?: int,
     *     CDCLatency?: int,
     *     TablesQueued?: int,
     *     TablesErrored?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     StopTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
