<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryRuntimeStatisticsTimeline|null $Timeline
 * @property QueryRuntimeStatisticsRows|null $Rows
 * @property QueryStage|null $OutputStage
 */
class QueryRuntimeStatistics extends Shape
{
    /**
     * @param array{
     *     Timeline?: QueryRuntimeStatisticsTimeline|null,
     *     Rows?: QueryRuntimeStatisticsRows|null,
     *     OutputStage?: QueryStage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
