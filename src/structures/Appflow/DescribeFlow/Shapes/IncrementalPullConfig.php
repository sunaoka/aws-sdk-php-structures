<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datetimeTypeFieldName
 */
class IncrementalPullConfig extends Shape
{
    /**
     * @param array{datetimeTypeFieldName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
