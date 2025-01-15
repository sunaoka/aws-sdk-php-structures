<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $size
 * @property int|null $index
 */
class ArrayPropertiesSummary extends Shape
{
    /**
     * @param array{
     *     size?: int|null,
     *     index?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
