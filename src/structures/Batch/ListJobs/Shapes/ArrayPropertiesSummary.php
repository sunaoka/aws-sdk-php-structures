<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $size
 * @property int $index
 */
class ArrayPropertiesSummary extends Shape
{
    /**
     * @param array{
     *     size?: int,
     *     index?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
