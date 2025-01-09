<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomerId
 * @property string $ColumnStatisticsTaskRunId
 * @property string $DatabaseName
 * @property string $TableName
 * @property list<string> $ColumnNameList
 * @property string $CatalogID
 * @property string $Role
 * @property double $SampleSize
 * @property string $SecurityConfiguration
 * @property int $NumberOfWorkers
 * @property string $WorkerType
 * @property 'FULL'|'INCREMENTAL' $ComputationType
 * @property 'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $ErrorMessage
 * @property double $DPUSeconds
 */
class ColumnStatisticsTaskRun extends Shape
{
    /**
     * @param array{
     *     CustomerId?: string,
     *     ColumnStatisticsTaskRunId?: string,
     *     DatabaseName?: string,
     *     TableName?: string,
     *     ColumnNameList?: list<string>,
     *     CatalogID?: string,
     *     Role?: string,
     *     SampleSize?: double,
     *     SecurityConfiguration?: string,
     *     NumberOfWorkers?: int,
     *     WorkerType?: string,
     *     ComputationType?: 'FULL'|'INCREMENTAL',
     *     Status?: 'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPED',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ErrorMessage?: string,
     *     DPUSeconds?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
