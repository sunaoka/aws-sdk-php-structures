<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property int|null $CompliantRuleCount
 * @property int|null $NonCompliantRuleCount
 * @property int|null $TotalRuleCount
 */
class AggregateConformancePackCompliance extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null,
     *     CompliantRuleCount?: int|null,
     *     NonCompliantRuleCount?: int|null,
     *     TotalRuleCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
