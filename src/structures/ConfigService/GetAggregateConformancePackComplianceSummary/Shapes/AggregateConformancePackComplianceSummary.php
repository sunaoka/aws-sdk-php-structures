<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AggregateConformancePackComplianceCount|null $ComplianceSummary
 * @property string|null $GroupName
 */
class AggregateConformancePackComplianceSummary extends Shape
{
    /**
     * @param array{
     *     ComplianceSummary?: AggregateConformancePackComplianceCount|null,
     *     GroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
