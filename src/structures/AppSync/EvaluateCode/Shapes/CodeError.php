<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorType
 * @property string $value
 * @property CodeErrorLocation $location
 */
class CodeError extends Shape
{
    /**
     * @param array{
     *     errorType?: string,
     *     value?: string,
     *     location?: CodeErrorLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
