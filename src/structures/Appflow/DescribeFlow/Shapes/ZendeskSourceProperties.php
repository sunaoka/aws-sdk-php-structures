<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $object
 */
class ZendeskSourceProperties extends Shape
{
    /**
     * @param array{object: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
