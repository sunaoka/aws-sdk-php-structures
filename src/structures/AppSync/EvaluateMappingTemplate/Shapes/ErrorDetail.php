<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateMappingTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
