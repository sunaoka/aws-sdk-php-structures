<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $min
 * @property string|null $max
 */
class DurationConstraints extends Shape
{
    /**
     * @param array{
     *     min?: string|null,
     *     max?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
