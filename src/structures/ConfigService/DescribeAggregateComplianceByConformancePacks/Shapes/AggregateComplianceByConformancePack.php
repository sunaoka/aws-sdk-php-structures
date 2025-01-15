<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConformancePackName
 * @property AggregateConformancePackCompliance|null $Compliance
 * @property string|null $AccountId
 * @property string|null $AwsRegion
 */
class AggregateComplianceByConformancePack extends Shape
{
    /**
     * @param array{
     *     ConformancePackName?: string|null,
     *     Compliance?: AggregateConformancePackCompliance|null,
     *     AccountId?: string|null,
     *     AwsRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
