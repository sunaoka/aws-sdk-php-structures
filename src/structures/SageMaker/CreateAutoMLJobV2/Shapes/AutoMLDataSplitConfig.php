<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $ValidationFraction
 */
class AutoMLDataSplitConfig extends Shape
{
    /**
     * @param array{ValidationFraction?: float|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
