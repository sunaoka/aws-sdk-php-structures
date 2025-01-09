<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING' $Status
 * @property string $ErrorMessage
 * @property 'InternalError'|'InvalidRequest' $ErrorCode
 * @property string $DataSourceErrorCode
 * @property DataSourceSyncJobMetrics $Metrics
 */
class DataSourceSyncJob extends Shape
{
    /**
     * @param array{
     *     ExecutionId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING',
     *     ErrorMessage?: string,
     *     ErrorCode?: 'InternalError'|'InvalidRequest',
     *     DataSourceErrorCode?: string,
     *     Metrics?: DataSourceSyncJobMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
