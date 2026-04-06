<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore\Shapes;

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
