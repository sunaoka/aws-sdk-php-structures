<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scheduleExpression
 * @property string|null $timezone
 * @property 'EXPRESSION_MATCH_ONLY'|'EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE'|null $pipelineExecutionStartCondition
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     scheduleExpression?: string|null,
     *     timezone?: string|null,
     *     pipelineExecutionStartCondition?: 'EXPRESSION_MATCH_ONLY'|'EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
