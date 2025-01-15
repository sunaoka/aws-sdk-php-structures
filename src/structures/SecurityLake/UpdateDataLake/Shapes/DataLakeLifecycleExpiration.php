<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $days
 */
class DataLakeLifecycleExpiration extends Shape
{
    /**
     * @param array{days?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
