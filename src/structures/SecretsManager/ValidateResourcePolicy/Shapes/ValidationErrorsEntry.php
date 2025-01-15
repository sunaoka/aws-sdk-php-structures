<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ValidateResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CheckName
 * @property string|null $ErrorMessage
 */
class ValidationErrorsEntry extends Shape
{
    /**
     * @param array{
     *     CheckName?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
