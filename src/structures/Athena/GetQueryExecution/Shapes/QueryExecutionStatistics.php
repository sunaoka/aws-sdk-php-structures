<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EngineExecutionTimeInMillis
 * @property int|null $DataScannedInBytes
 * @property string|null $DataManifestLocation
 * @property int|null $TotalExecutionTimeInMillis
 * @property int|null $QueryQueueTimeInMillis
 * @property int|null $ServicePreProcessingTimeInMillis
 * @property int|null $QueryPlanningTimeInMillis
 * @property int|null $ServiceProcessingTimeInMillis
 * @property ResultReuseInformation|null $ResultReuseInformation
 * @property double|null $DpuCount
 */
class QueryExecutionStatistics extends Shape
{
    /**
     * @param array{
     *     EngineExecutionTimeInMillis?: int|null,
     *     DataScannedInBytes?: int|null,
     *     DataManifestLocation?: string|null,
     *     TotalExecutionTimeInMillis?: int|null,
     *     QueryQueueTimeInMillis?: int|null,
     *     ServicePreProcessingTimeInMillis?: int|null,
     *     QueryPlanningTimeInMillis?: int|null,
     *     ServiceProcessingTimeInMillis?: int|null,
     *     ResultReuseInformation?: ResultReuseInformation|null,
     *     DpuCount?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
