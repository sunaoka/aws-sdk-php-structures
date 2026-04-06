<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionType
 */
class CustomConnectionParameters extends Shape
{
    /**
     * @param array{ConnectionType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
