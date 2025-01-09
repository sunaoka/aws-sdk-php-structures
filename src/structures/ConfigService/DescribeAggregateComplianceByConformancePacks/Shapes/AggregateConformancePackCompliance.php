<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ComplianceType
 * @property int $CompliantRuleCount
 * @property int $NonCompliantRuleCount
 * @property int $TotalRuleCount
 */
class AggregateConformancePackCompliance extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA',
     *     CompliantRuleCount?: int,
     *     NonCompliantRuleCount?: int,
     *     TotalRuleCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
