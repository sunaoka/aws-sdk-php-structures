<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsightsByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $noncompliantEvidenceCount
 * @property int $compliantEvidenceCount
 * @property int $inconclusiveEvidenceCount
 * @property int $assessmentControlsCountByNoncompliantEvidence
 * @property int $totalAssessmentControlsCount
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class InsightsByAssessment extends Shape
{
    /**
     * @param array{
     *     noncompliantEvidenceCount?: int,
     *     compliantEvidenceCount?: int,
     *     inconclusiveEvidenceCount?: int,
     *     assessmentControlsCountByNoncompliantEvidence?: int,
     *     totalAssessmentControlsCount?: int,
     *     lastUpdated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
