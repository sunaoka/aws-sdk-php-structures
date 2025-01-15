<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineExecutionId
 * @property string|null $ruleExecutionId
 * @property int<1, max>|null $pipelineVersion
 * @property string|null $stageName
 * @property string|null $ruleName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property string|null $updatedBy
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed'|null $status
 * @property RuleExecutionInput|null $input
 * @property RuleExecutionOutput|null $output
 */
class RuleExecutionDetail extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string|null,
     *     ruleExecutionId?: string|null,
     *     pipelineVersion?: int<1, max>|null,
     *     stageName?: string|null,
     *     ruleName?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed'|null,
     *     input?: RuleExecutionInput|null,
     *     output?: RuleExecutionOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
