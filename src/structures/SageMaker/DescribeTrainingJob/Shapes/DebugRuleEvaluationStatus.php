<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleConfigurationName
 * @property string|null $RuleEvaluationJobArn
 * @property 'InProgress'|'NoIssuesFound'|'IssuesFound'|'Error'|'Stopping'|'Stopped'|null $RuleEvaluationStatus
 * @property string|null $StatusDetails
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DebugRuleEvaluationStatus extends Shape
{
    /**
     * @param array{
     *     RuleConfigurationName?: string|null,
     *     RuleEvaluationJobArn?: string|null,
     *     RuleEvaluationStatus?: 'InProgress'|'NoIssuesFound'|'IssuesFound'|'Error'|'Stopping'|'Stopped'|null,
     *     StatusDetails?: string|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
