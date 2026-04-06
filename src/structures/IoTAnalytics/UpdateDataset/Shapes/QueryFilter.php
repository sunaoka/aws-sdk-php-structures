<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeltaTime|null $deltaTime
 */
class QueryFilter extends Shape
{
    /**
     * @param array{deltaTime?: DeltaTime|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
