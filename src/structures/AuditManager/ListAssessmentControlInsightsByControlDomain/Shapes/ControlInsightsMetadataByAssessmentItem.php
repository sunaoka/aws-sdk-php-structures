<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentControlInsightsByControlDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property EvidenceInsights|null $evidenceInsights
 * @property string|null $controlSetName
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class ControlInsightsMetadataByAssessmentItem extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     evidenceInsights?: EvidenceInsights|null,
     *     controlSetName?: string|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
