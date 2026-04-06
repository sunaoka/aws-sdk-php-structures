<?php

namespace Sunaoka\Aws\Structures\NovaAct\UpdateAct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string|null $type
 */
class ActError extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
