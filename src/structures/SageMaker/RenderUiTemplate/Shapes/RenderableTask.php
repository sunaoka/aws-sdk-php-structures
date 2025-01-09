<?php

namespace Sunaoka\Aws\Structures\SageMaker\RenderUiTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Input
 */
class RenderableTask extends Shape
{
    /**
     * @param array{Input: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
