<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleExecutionId
 * @property 'InProgress'|'Abandoned'|'Succeeded'|'Failed' $status
 * @property string $summary
 * @property \Aws\Api\DateTimeResult $lastStatusChange
 * @property string $token
 * @property string $lastUpdatedBy
 * @property string $externalExecutionId
 * @property string $externalExecutionUrl
 * @property ErrorDetails $errorDetails
 */
class RuleExecution extends Shape
{
    /**
     * @param array{
     *     ruleExecutionId?: string,
     *     status?: 'InProgress'|'Abandoned'|'Succeeded'|'Failed',
     *     summary?: string,
     *     lastStatusChange?: \Aws\Api\DateTimeResult,
     *     token?: string,
     *     lastUpdatedBy?: string,
     *     externalExecutionId?: string,
     *     externalExecutionUrl?: string,
     *     errorDetails?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
