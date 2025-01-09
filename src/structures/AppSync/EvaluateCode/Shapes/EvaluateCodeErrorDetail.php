<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property list<CodeError> $codeErrors
 */
class EvaluateCodeErrorDetail extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     codeErrors?: list<CodeError>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
