<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NonCompliantCount
 * @property SeveritySummary|null $SeveritySummary
 */
class NonCompliantSummary extends Shape
{
    /**
     * @param array{
     *     NonCompliantCount?: int|null,
     *     SeveritySummary?: SeveritySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
