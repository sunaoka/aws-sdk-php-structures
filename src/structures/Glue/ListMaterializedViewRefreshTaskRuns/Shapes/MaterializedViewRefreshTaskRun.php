<?php

namespace Sunaoka\Aws\Structures\Glue\ListMaterializedViewRefreshTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerId
 * @property string|null $MaterializedViewRefreshTaskRunId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $CatalogId
 * @property string|null $Role
 * @property 'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $ErrorMessage
 * @property double|null $DPUSeconds
 * @property 'FULL'|'INCREMENTAL'|null $RefreshType
 * @property int<0, max>|null $ProcessedBytes
 */
class MaterializedViewRefreshTaskRun extends Shape
{
    /**
     * @param array{
     *     CustomerId?: string|null,
     *     MaterializedViewRefreshTaskRunId?: string|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     CatalogId?: string|null,
     *     Role?: string|null,
     *     Status?: 'STARTING'|'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPED'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null,
     *     DPUSeconds?: double|null,
     *     RefreshType?: 'FULL'|'INCREMENTAL'|null,
     *     ProcessedBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
