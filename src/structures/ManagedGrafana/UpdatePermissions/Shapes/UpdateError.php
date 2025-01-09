<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateInstruction $causedBy
 * @property int<100, 999> $code
 * @property string $message
 */
class UpdateError extends Shape
{
    /**
     * @param array{
     *     causedBy: UpdateInstruction,
     *     code: int<100, 999>,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
