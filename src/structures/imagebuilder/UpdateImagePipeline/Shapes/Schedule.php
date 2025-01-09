<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scheduleExpression
 * @property string $timezone
 * @property 'EXPRESSION_MATCH_ONLY'|'EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE' $pipelineExecutionStartCondition
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     scheduleExpression?: string,
     *     timezone?: string,
     *     pipelineExecutionStartCondition?: 'EXPRESSION_MATCH_ONLY'|'EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
