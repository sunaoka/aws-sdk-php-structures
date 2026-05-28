<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assessmentId
 * @property string $serviceArn
 * @property 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null $assessmentStatus
 * @property 'TOPOLOGY_ENHANCEMENT'|'SERVICE_FUNCTION_GENERATION'|'RESILIENCE_ASSESSMENT'|null $assessmentStep
 * @property int|null $totalFindings
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string|null $errorMessage
 * @property 'INVALID_PERMISSIONS'|'CMK_ACCESS_DENIED'|'AGENT_ERROR'|'INTERNAL_ERROR'|'DESIGN_FILE_ACCESS_DENIED'|null $errorCode
 * @property AssessmentCost|null $assessmentCost
 * @property int|null $billableAssessmentUnitCount
 * @property Achievability|null $achievability
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     assessmentId: string,
     *     serviceArn: string,
     *     assessmentStatus?: 'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'|null,
     *     assessmentStep?: 'TOPOLOGY_ENHANCEMENT'|'SERVICE_FUNCTION_GENERATION'|'RESILIENCE_ASSESSMENT'|null,
     *     totalFindings?: int|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     errorMessage?: string|null,
     *     errorCode?: 'INVALID_PERMISSIONS'|'CMK_ACCESS_DENIED'|'AGENT_ERROR'|'INTERNAL_ERROR'|'DESIGN_FILE_ACCESS_DENIED'|null,
     *     assessmentCost?: AssessmentCost|null,
     *     billableAssessmentUnitCount?: int|null,
     *     achievability?: Achievability|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
