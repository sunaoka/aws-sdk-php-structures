<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryRuntimeStatisticsTimeline $Timeline
 * @property QueryRuntimeStatisticsRows $Rows
 * @property QueryStage $OutputStage
 */
class QueryRuntimeStatistics extends Shape
{
    /**
     * @param array{
     *     Timeline?: QueryRuntimeStatisticsTimeline,
     *     Rows?: QueryRuntimeStatisticsRows,
     *     OutputStage?: QueryStage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
