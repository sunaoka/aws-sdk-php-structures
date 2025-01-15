<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datetimeTypeFieldName
 */
class IncrementalPullConfig extends Shape
{
    /**
     * @param array{datetimeTypeFieldName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
