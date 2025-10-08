<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyBuildWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property 'SCHEDULED'|'CANCEL_REQUESTED'|'PREPROCESSING'|'BUILDING'|'TESTING'|'COMPLETED'|'FAILED'|'CANCELLED' $status
 * @property 'INGEST_CONTENT'|'REFINE_POLICY'|'IMPORT_POLICY' $buildWorkflowType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AutomatedReasoningPolicyBuildWorkflowSummary extends Shape
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     status: 'SCHEDULED'|'CANCEL_REQUESTED'|'PREPROCESSING'|'BUILDING'|'TESTING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     buildWorkflowType: 'INGEST_CONTENT'|'REFINE_POLICY'|'IMPORT_POLICY',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
