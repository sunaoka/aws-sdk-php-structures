<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CompliantConformancePackCount
 * @property int|null $NonCompliantConformancePackCount
 */
class AggregateConformancePackComplianceCount extends Shape
{
    /**
     * @param array{
     *     CompliantConformancePackCount?: int|null,
     *     NonCompliantConformancePackCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
