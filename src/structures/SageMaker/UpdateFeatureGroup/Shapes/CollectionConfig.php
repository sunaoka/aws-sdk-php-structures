<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VectorConfig|null $VectorConfig
 */
class CollectionConfig extends Shape
{
    /**
     * @param array{VectorConfig?: VectorConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
