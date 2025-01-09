<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA' $ComplianceType
 * @property string $AccountId
 * @property string $AwsRegion
 */
class AggregateConformancePackComplianceFilters extends Shape
{
    /**
     * @param array{
     *     ConformancePackName?: string,
     *     ComplianceType?: 'COMPLIANT'|'NON_COMPLIANT'|'INSUFFICIENT_DATA',
     *     AccountId?: string,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
