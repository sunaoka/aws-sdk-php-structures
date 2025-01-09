<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StageId
 * @property string $State
 * @property int $OutputBytes
 * @property int $OutputRows
 * @property int $InputBytes
 * @property int $InputRows
 * @property int $ExecutionTime
 * @property QueryStagePlanNode $QueryStagePlan
 * @property list<QueryStage> $SubStages
 */
class QueryStage extends Shape
{
    /**
     * @param array{
     *     StageId?: int,
     *     State?: string,
     *     OutputBytes?: int,
     *     OutputRows?: int,
     *     InputBytes?: int,
     *     InputRows?: int,
     *     ExecutionTime?: int,
     *     QueryStagePlan?: QueryStagePlanNode,
     *     SubStages?: list<QueryStage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
