<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Label
 */
class OSRelease extends Shape
{
    /**
     * @param array{Label?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
