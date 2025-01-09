<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{errorMessage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
