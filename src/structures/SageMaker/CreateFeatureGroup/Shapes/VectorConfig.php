<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 8192> $Dimension
 */
class VectorConfig extends Shape
{
    /**
     * @param array{Dimension: int<1, 8192>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
