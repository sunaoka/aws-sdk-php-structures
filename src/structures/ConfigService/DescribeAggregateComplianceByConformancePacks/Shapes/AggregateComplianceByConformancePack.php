<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConformancePackName
 * @property AggregateConformancePackCompliance $Compliance
 * @property string $AccountId
 * @property string $AwsRegion
 */
class AggregateComplianceByConformancePack extends Shape
{
    /**
     * @param array{
     *     ConformancePackName?: string,
     *     Compliance?: AggregateConformancePackCompliance,
     *     AccountId?: string,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
