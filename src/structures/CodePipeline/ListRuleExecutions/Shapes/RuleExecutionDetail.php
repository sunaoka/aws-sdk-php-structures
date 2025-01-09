<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property string $ruleExecutionId
 * @property int $pipelineVersion
 * @property string $stageName
 * @property string $ruleName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property string $updatedBy
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed' $status
 * @property RuleExecutionInput $input
 * @property RuleExecutionOutput $output
 */
class RuleExecutionDetail extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string,
     *     ruleExecutionId?: string,
     *     pipelineVersion?: int,
     *     stageName?: string,
     *     ruleName?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed',
     *     input?: RuleExecutionInput,
     *     output?: RuleExecutionOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
