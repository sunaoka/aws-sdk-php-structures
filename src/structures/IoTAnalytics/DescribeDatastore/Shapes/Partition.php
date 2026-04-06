<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 */
class Partition extends Shape
{
    /**
     * @param array{attributeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
