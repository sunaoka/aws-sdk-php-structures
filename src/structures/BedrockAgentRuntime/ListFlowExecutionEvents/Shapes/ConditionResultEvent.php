<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property list<SatisfiedCondition> $satisfiedConditions
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class ConditionResultEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     satisfiedConditions: list<SatisfiedCondition>,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
