<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $days
 */
class DataLakeLifecycleExpiration extends Shape
{
    /**
     * @param array{days?: int<1, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
