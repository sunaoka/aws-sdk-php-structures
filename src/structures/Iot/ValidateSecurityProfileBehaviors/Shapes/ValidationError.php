<?php

namespace Sunaoka\Aws\Structures\Iot\ValidateSecurityProfileBehaviors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 */
class ValidationError extends Shape
{
    /**
     * @param array{errorMessage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
