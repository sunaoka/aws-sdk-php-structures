<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $activeAssessmentsCount
 * @property int $noncompliantEvidenceCount
 * @property int $compliantEvidenceCount
 * @property int $inconclusiveEvidenceCount
 * @property int $assessmentControlsCountByNoncompliantEvidence
 * @property int $totalAssessmentControlsCount
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class Insights extends Shape
{
    /**
     * @param array{
     *     activeAssessmentsCount?: int,
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
