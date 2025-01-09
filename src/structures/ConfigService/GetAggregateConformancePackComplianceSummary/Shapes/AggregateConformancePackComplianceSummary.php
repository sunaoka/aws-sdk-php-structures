<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AggregateConformancePackComplianceCount $ComplianceSummary
 * @property string $GroupName
 */
class AggregateConformancePackComplianceSummary extends Shape
{
    /**
     * @param array{
     *     ComplianceSummary?: AggregateConformancePackComplianceCount,
     *     GroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
