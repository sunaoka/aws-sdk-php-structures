<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentControlInsightsByControlDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property EvidenceInsights $evidenceInsights
 * @property string $controlSetName
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class ControlInsightsMetadataByAssessmentItem extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     id?: string,
     *     evidenceInsights?: EvidenceInsights,
     *     controlSetName?: string,
     *     lastUpdated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
