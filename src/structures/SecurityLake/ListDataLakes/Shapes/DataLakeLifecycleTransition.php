<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $days
 * @property string $storageClass
 */
class DataLakeLifecycleTransition extends Shape
{
    /**
     * @param array{
     *     days?: int<1, max>,
     *     storageClass?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
