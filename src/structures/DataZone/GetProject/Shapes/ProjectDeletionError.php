<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $message
 */
class ProjectDeletionError extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
