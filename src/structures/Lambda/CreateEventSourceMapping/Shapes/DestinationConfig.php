<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OnSuccess $OnSuccess
 * @property OnFailure $OnFailure
 */
class DestinationConfig extends Shape
{
    /**
     * @param array{
     *     OnSuccess?: OnSuccess,
     *     OnFailure?: OnFailure
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
