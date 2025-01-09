<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CompliantCount
 * @property SeveritySummary $SeveritySummary
 */
class CompliantSummary extends Shape
{
    /**
     * @param array{
     *     CompliantCount?: int,
     *     SeveritySummary?: SeveritySummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
