<?php

namespace Sunaoka\Aws\Structures\SageMaker\RenderUiTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 */
class UiTemplate extends Shape
{
    /**
     * @param array{Content: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
