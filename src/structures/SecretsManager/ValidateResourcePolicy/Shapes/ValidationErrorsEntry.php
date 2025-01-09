<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ValidateResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CheckName
 * @property string $ErrorMessage
 */
class ValidationErrorsEntry extends Shape
{
    /**
     * @param array{
     *     CheckName?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
