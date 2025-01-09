<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EngineExecutionTimeInMillis
 * @property int $DataScannedInBytes
 * @property string $DataManifestLocation
 * @property int $TotalExecutionTimeInMillis
 * @property int $QueryQueueTimeInMillis
 * @property int $ServicePreProcessingTimeInMillis
 * @property int $QueryPlanningTimeInMillis
 * @property int $ServiceProcessingTimeInMillis
 * @property ResultReuseInformation $ResultReuseInformation
 */
class QueryExecutionStatistics extends Shape
{
    /**
     * @param array{
     *     EngineExecutionTimeInMillis?: int,
     *     DataScannedInBytes?: int,
     *     DataManifestLocation?: string,
     *     TotalExecutionTimeInMillis?: int,
     *     QueryQueueTimeInMillis?: int,
     *     ServicePreProcessingTimeInMillis?: int,
     *     QueryPlanningTimeInMillis?: int,
     *     ServiceProcessingTimeInMillis?: int,
     *     ResultReuseInformation?: ResultReuseInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
