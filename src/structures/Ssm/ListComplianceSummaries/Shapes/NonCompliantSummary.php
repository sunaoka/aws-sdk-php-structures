<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NonCompliantCount
 * @property SeveritySummary $SeveritySummary
 */
class NonCompliantSummary extends Shape
{
    /**
     * @param array{
     *     NonCompliantCount?: int,
     *     SeveritySummary?: SeveritySummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
