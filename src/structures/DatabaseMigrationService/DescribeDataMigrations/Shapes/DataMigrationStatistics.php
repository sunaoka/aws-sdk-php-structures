<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TablesLoaded
 * @property int|null $ElapsedTimeMillis
 * @property int|null $TablesLoading
 * @property int|null $FullLoadPercentage
 * @property int|null $CDCLatency
 * @property int|null $TablesQueued
 * @property int|null $TablesErrored
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $StopTime
 */
class DataMigrationStatistics extends Shape
{
    /**
     * @param array{
     *     TablesLoaded?: int|null,
     *     ElapsedTimeMillis?: int|null,
     *     TablesLoading?: int|null,
     *     FullLoadPercentage?: int|null,
     *     CDCLatency?: int|null,
     *     TablesQueued?: int|null,
     *     TablesErrored?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     StopTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
