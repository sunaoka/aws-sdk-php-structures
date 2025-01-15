<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Label
 */
class OSRelease extends Shape
{
    /**
     * @param array{Label?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
