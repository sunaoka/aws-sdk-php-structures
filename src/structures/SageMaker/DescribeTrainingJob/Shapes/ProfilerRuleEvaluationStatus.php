<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleConfigurationName
 * @property string $RuleEvaluationJobArn
 * @property 'InProgress'|'NoIssuesFound'|'IssuesFound'|'Error'|'Stopping'|'Stopped' $RuleEvaluationStatus
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ProfilerRuleEvaluationStatus extends Shape
{
    /**
     * @param array{
     *     RuleConfigurationName?: string,
     *     RuleEvaluationJobArn?: string,
     *     RuleEvaluationStatus?: 'InProgress'|'NoIssuesFound'|'IssuesFound'|'Error'|'Stopping'|'Stopped',
     *     StatusDetails?: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
