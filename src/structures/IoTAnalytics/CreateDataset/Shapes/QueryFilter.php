<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeltaTime $deltaTime
 */
class QueryFilter extends Shape
{
    /**
     * @param array{deltaTime?: DeltaTime} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
