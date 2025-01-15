<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConformancePackName
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null $ComplianceType
 * @property string|null $AccountId
 * @property string|null $AwsRegion
 */
class AggregateConformancePackComplianceFilters extends Shape
{
    /**
     * @param array{
     *     ConformancePackName?: string|null,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA'|null,
     *     AccountId?: string|null,
     *     AwsRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
