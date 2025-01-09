<?php

namespace Sunaoka\Aws\Structures\SageMaker\RenderUiTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 */
class RenderingError extends Shape
{
    /**
     * @param array{
     *     Code: string,
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
