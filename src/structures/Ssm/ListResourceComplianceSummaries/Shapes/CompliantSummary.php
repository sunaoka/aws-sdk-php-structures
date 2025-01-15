<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CompliantCount
 * @property SeveritySummary|null $SeveritySummary
 */
class CompliantSummary extends Shape
{
    /**
     * @param array{
     *     CompliantCount?: int|null,
     *     SeveritySummary?: SeveritySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
