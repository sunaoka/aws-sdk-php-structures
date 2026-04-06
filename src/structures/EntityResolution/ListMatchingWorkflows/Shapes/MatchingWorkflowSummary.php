<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER' $resolutionType
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $workflowArn
 * @property string $workflowName
 */
class MatchingWorkflowSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     resolutionType: 'RULE_MATCHING'|'ML_MATCHING'|'PROVIDER',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     workflowArn: string,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
