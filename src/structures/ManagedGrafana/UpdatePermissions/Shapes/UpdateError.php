<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, 999> $code
 * @property string $message
 * @property UpdateInstruction $causedBy
 */
class UpdateError extends Shape
{
    /**
     * @param array{
     *     code: int<100, 999>,
     *     message: string,
     *     causedBy: UpdateInstruction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
