<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $code
 */
class ProtectedJobError extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     code: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
