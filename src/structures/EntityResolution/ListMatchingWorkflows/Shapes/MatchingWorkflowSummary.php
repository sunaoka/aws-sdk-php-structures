<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowName
 * @property string $workflowArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER' $resolutionType
 */
class MatchingWorkflowSummary extends Shape
{
    /**
     * @param array{
     *     workflowName: string,
     *     workflowArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     resolutionType: 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
