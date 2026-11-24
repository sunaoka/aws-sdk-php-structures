<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 */
class SnapmirrorSource extends Shape
{
    /**
     * @param array{Path?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
