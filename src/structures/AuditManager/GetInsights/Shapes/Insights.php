<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $activeAssessmentsCount
 * @property int|null $noncompliantEvidenceCount
 * @property int|null $compliantEvidenceCount
 * @property int|null $inconclusiveEvidenceCount
 * @property int|null $assessmentControlsCountByNoncompliantEvidence
 * @property int|null $totalAssessmentControlsCount
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class Insights extends Shape
{
    /**
     * @param array{
     *     activeAssessmentsCount?: int|null,
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
