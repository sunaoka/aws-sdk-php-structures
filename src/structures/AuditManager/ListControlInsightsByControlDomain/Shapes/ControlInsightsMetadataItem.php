<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlInsightsByControlDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property EvidenceInsights|null $evidenceInsights
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 */
class ControlInsightsMetadataItem extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     evidenceInsights?: EvidenceInsights|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
