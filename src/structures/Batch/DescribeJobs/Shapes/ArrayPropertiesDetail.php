<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int> $statusSummary
 * @property int $size
 * @property int $index
 */
class ArrayPropertiesDetail extends Shape
{
    /**
     * @param array{
     *     statusSummary?: array<string, int>,
     *     size?: int,
     *     index?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
