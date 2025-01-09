<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $message
 */
class ProjectDeletionError extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
