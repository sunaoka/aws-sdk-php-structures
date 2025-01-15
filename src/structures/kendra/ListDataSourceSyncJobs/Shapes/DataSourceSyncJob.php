<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null $Status
 * @property string|null $ErrorMessage
 * @property 'InternalError'|'InvalidRequest'|null $ErrorCode
 * @property string|null $DataSourceErrorCode
 * @property DataSourceSyncJobMetrics|null $Metrics
 */
class DataSourceSyncJob extends Shape
{
    /**
     * @param array{
     *     ExecutionId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: 'InternalError'|'InvalidRequest'|null,
     *     DataSourceErrorCode?: string|null,
     *     Metrics?: DataSourceSyncJobMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
