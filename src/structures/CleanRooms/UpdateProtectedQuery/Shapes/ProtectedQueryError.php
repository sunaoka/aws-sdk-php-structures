<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $code
 */
class ProtectedQueryError extends Shape
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
