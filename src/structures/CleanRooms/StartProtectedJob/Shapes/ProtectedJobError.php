<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $code
 * @property RetryInfo|null $retry
 */
class ProtectedJobError extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     code: string,
     *     retry?: RetryInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
