<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING' $status
 * @property ErrorDetail $error
 * @property string $dataSourceErrorCode
 * @property DataSourceSyncJobMetrics $metrics
 */
class DataSourceSyncJob extends Shape
{
    /**
     * @param array{
     *     executionId?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     status?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING',
     *     error?: ErrorDetail,
     *     dataSourceErrorCode?: string,
     *     metrics?: DataSourceSyncJobMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
