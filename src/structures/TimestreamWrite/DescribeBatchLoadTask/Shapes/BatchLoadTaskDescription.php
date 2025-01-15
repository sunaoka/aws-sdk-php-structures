<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskId
 * @property string|null $ErrorMessage
 * @property DataSourceConfiguration|null $DataSourceConfiguration
 * @property BatchLoadProgressReport|null $ProgressReport
 * @property ReportConfiguration|null $ReportConfiguration
 * @property DataModelConfiguration|null $DataModelConfiguration
 * @property string|null $TargetDatabaseName
 * @property string|null $TargetTableName
 * @property 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME'|null $TaskStatus
 * @property int|null $RecordVersion
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $ResumableUntil
 */
class BatchLoadTaskDescription extends Shape
{
    /**
     * @param array{
     *     TaskId?: string|null,
     *     ErrorMessage?: string|null,
     *     DataSourceConfiguration?: DataSourceConfiguration|null,
     *     ProgressReport?: BatchLoadProgressReport|null,
     *     ReportConfiguration?: ReportConfiguration|null,
     *     DataModelConfiguration?: DataModelConfiguration|null,
     *     TargetDatabaseName?: string|null,
     *     TargetTableName?: string|null,
     *     TaskStatus?: 'CREATED'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'PROGRESS_STOPPED'|'PENDING_RESUME'|null,
     *     RecordVersion?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ResumableUntil?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
