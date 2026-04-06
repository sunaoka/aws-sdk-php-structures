<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $QueryQueueTimeInMillis
 * @property int|null $ServicePreProcessingTimeInMillis
 * @property int|null $QueryPlanningTimeInMillis
 * @property int|null $EngineExecutionTimeInMillis
 * @property int|null $ServiceProcessingTimeInMillis
 * @property int|null $TotalExecutionTimeInMillis
 */
class QueryRuntimeStatisticsTimeline extends Shape
{
    /**
     * @param array{
     *     QueryQueueTimeInMillis?: int|null,
     *     ServicePreProcessingTimeInMillis?: int|null,
     *     QueryPlanningTimeInMillis?: int|null,
     *     EngineExecutionTimeInMillis?: int|null,
     *     ServiceProcessingTimeInMillis?: int|null,
     *     TotalExecutionTimeInMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
