<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property list<CodeError>|null $codeErrors
 */
class EvaluateCodeErrorDetail extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     codeErrors?: list<CodeError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
