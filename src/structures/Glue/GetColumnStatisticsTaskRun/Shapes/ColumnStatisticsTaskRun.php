<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerId
 * @property string|null $ColumnStatisticsTaskRunId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property list<string>|null $ColumnNameList
 * @property string|null $CatalogID
 * @property string|null $Role
 * @property double|null $SampleSize
 * @property string|null $SecurityConfiguration
 * @property int<1, max>|null $NumberOfWorkers
 * @property string|null $WorkerType
 * @property 'FULL'|'INCREMENTAL'|null $ComputationType
 * @property 'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $ErrorMessage
 * @property double|null $DPUSeconds
 */
class ColumnStatisticsTaskRun extends Shape
{
    /**
     * @param array{
     *     CustomerId?: string|null,
     *     ColumnStatisticsTaskRunId?: string|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     ColumnNameList?: list<string>|null,
     *     CatalogID?: string|null,
     *     Role?: string|null,
     *     SampleSize?: double|null,
     *     SecurityConfiguration?: string|null,
     *     NumberOfWorkers?: int<1, max>|null,
     *     WorkerType?: string|null,
     *     ComputationType?: 'FULL'|'INCREMENTAL'|null,
     *     Status?: 'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPED'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null,
     *     DPUSeconds?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
