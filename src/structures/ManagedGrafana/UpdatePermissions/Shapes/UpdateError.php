<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateInstruction $causedBy
 * @property int $code
 * @property string $message
 */
class UpdateError extends Shape
{
    /**
     * @param array{
     *     causedBy: UpdateInstruction,
     *     code: int,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
