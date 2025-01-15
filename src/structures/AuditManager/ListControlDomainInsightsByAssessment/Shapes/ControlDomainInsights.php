<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsightsByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property int|null $controlsCountByNoncompliantEvidence
 * @property int|null $totalControlsCount
 * @property EvidenceInsights|null $evidenceInsights
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class ControlDomainInsights extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     controlsCountByNoncompliantEvidence?: int|null,
     *     totalControlsCount?: int|null,
     *     evidenceInsights?: EvidenceInsights|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
