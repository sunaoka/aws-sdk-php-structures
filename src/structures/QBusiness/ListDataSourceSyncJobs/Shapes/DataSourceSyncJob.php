<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSourceSyncJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $executionId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null $status
 * @property ErrorDetail|null $error
 * @property string|null $dataSourceErrorCode
 * @property DataSourceSyncJobMetrics|null $metrics
 */
class DataSourceSyncJob extends Shape
{
    /**
     * @param array{
     *     executionId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null,
     *     error?: ErrorDetail|null,
     *     dataSourceErrorCode?: string|null,
     *     metrics?: DataSourceSyncJobMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
