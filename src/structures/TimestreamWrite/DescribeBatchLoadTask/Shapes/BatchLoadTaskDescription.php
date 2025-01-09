<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskId
 * @property string $ErrorMessage
 * @property DataSourceConfiguration $DataSourceConfiguration
 * @property BatchLoadProgressReport $ProgressReport
 * @property ReportConfiguration $ReportConfiguration
 * @property DataModelConfiguration $DataModelConfiguration
 * @property string $TargetDatabaseName
 * @property string $TargetTableName
 * @property 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME' $TaskStatus
 * @property int $RecordVersion
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult $ResumableUntil
 */
class BatchLoadTaskDescription extends Shape
{
    /**
     * @param array{
     *     TaskId?: string,
     *     ErrorMessage?: string,
     *     DataSourceConfiguration?: DataSourceConfiguration,
     *     ProgressReport?: BatchLoadProgressReport,
     *     ReportConfiguration?: ReportConfiguration,
     *     DataModelConfiguration?: DataModelConfiguration,
     *     TargetDatabaseName?: string,
     *     TargetTableName?: string,
     *     TaskStatus?: 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME',
     *     RecordVersion?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     ResumableUntil?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
