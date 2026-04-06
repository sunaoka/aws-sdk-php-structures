<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int>|null $statusSummary
 * @property int|null $statusSummaryLastUpdatedAt
 * @property int|null $size
 * @property int|null $index
 */
class ArrayPropertiesDetail extends Shape
{
    /**
     * @param array{
     *     statusSummary?: array<string, int>|null,
     *     statusSummaryLastUpdatedAt?: int|null,
     *     size?: int|null,
     *     index?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
