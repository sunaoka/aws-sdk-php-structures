<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorType
 * @property string|null $value
 * @property CodeErrorLocation|null $location
 */
class CodeError extends Shape
{
    /**
     * @param array{
     *     errorType?: string|null,
     *     value?: string|null,
     *     location?: CodeErrorLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
