<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Version
 */
class SimplifiedApplication extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
