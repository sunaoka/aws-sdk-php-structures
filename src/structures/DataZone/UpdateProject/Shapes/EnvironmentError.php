<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string $message
 */
class EnvironmentError extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
