<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Stats|null $Details
 */
class StatsEvent extends Shape
{
    /**
     * @param array{Details?: Stats|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
