<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $QueryQueueTimeInMillis
 * @property int $ServicePreProcessingTimeInMillis
 * @property int $QueryPlanningTimeInMillis
 * @property int $EngineExecutionTimeInMillis
 * @property int $ServiceProcessingTimeInMillis
 * @property int $TotalExecutionTimeInMillis
 */
class QueryRuntimeStatisticsTimeline extends Shape
{
    /**
     * @param array{
     *     QueryQueueTimeInMillis?: int,
     *     ServicePreProcessingTimeInMillis?: int,
     *     QueryPlanningTimeInMillis?: int,
     *     EngineExecutionTimeInMillis?: int,
     *     ServiceProcessingTimeInMillis?: int,
     *     TotalExecutionTimeInMillis?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
