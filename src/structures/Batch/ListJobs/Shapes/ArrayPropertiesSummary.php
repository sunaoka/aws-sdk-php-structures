<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $size
 * @property int|null $index
 * @property array<string, int>|null $statusSummary
 * @property int|null $statusSummaryLastUpdatedAt
 */
class ArrayPropertiesSummary extends Shape
{
    /**
     * @param array{
     *     size?: int|null,
     *     index?: int|null,
     *     statusSummary?: array<string, int>|null,
     *     statusSummaryLastUpdatedAt?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
