<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Errors
 */
class Messages extends Shape
{
    /**
     * @param array{Errors: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
