<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Dimension
 */
class VectorConfig extends Shape
{
    /**
     * @param array{Dimension: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
