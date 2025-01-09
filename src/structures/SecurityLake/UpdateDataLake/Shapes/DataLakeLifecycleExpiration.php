<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $days
 */
class DataLakeLifecycleExpiration extends Shape
{
    /**
     * @param array{days?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
