<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Stats $Details
 */
class StatsEvent extends Shape
{
    /**
     * @param array{Details?: Stats} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
