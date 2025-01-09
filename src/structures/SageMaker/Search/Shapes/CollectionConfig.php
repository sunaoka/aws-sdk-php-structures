<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorConfig $VectorConfig
 */
class CollectionConfig extends Shape
{
    /**
     * @param array{VectorConfig?: VectorConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
