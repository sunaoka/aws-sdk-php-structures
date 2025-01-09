<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property 'Latest'|'All' $startTimeRange
 */
class LatestInPipelineExecutionFilter extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId: string,
     *     startTimeRange: 'Latest'|'All'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
