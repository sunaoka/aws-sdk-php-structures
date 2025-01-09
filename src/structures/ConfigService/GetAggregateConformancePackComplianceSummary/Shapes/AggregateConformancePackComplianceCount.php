<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CompliantConformancePackCount
 * @property int $NonCompliantConformancePackCount
 */
class AggregateConformancePackComplianceCount extends Shape
{
    /**
     * @param array{
     *     CompliantConformancePackCount?: int,
     *     NonCompliantConformancePackCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
