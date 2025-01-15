<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $StageId
 * @property string|null $State
 * @property int|null $OutputBytes
 * @property int|null $OutputRows
 * @property int|null $InputBytes
 * @property int|null $InputRows
 * @property int|null $ExecutionTime
 * @property QueryStagePlanNode|null $QueryStagePlan
 * @property list<QueryStage>|null $SubStages
 */
class QueryStage extends Shape
{
    /**
     * @param array{
     *     StageId?: int|null,
     *     State?: string|null,
     *     OutputBytes?: int|null,
     *     OutputRows?: int|null,
     *     InputBytes?: int|null,
     *     InputRows?: int|null,
     *     ExecutionTime?: int|null,
     *     QueryStagePlan?: QueryStagePlanNode|null,
     *     SubStages?: list<QueryStage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
