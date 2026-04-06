<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FindingsSummary.TotalFindings'|'FindingsSummary.Severities.Other'|'FindingsSummary.Severities.Fatal'|'FindingsSummary.Severities.Critical'|'FindingsSummary.Severities.High'|'FindingsSummary.Severities.Medium'|'FindingsSummary.Severities.Low'|'FindingsSummary.Severities.Informational'|'FindingsSummary.Severities.Unknown'|null $FieldName
 * @property NumberFilter|null $Filter
 */
class ResourcesNumberFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'FindingsSummary.TotalFindings'|'FindingsSummary.Severities.Other'|'FindingsSummary.Severities.Fatal'|'FindingsSummary.Severities.Critical'|'FindingsSummary.Severities.High'|'FindingsSummary.Severities.Medium'|'FindingsSummary.Severities.Low'|'FindingsSummary.Severities.Informational'|'FindingsSummary.Severities.Unknown'|null,
     *     Filter?: NumberFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
