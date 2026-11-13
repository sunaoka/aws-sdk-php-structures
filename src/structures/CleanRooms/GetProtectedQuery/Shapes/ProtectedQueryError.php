<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $code
 * @property RetryInfo|null $retry
 */
class ProtectedQueryError extends Shape
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
