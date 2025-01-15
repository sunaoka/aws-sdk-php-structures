<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsightsByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $noncompliantEvidenceCount
 * @property int|null $compliantEvidenceCount
 * @property int|null $inconclusiveEvidenceCount
 * @property int|null $assessmentControlsCountByNoncompliantEvidence
 * @property int|null $totalAssessmentControlsCount
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class InsightsByAssessment extends Shape
{
    /**
     * @param array{
     *     noncompliantEvidenceCount?: int|null,
     *     compliantEvidenceCount?: int|null,
     *     inconclusiveEvidenceCount?: int|null,
     *     assessmentControlsCountByNoncompliantEvidence?: int|null,
     *     totalAssessmentControlsCount?: int|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
