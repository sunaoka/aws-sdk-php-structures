<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlInsightsByControlDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property EvidenceInsights $evidenceInsights
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class ControlInsightsMetadataItem extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     id?: string,
     *     evidenceInsights?: EvidenceInsights,
     *     lastUpdated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
