<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{errorMessage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
