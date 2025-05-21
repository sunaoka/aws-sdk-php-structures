<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 */
class ProtectedJobS3Output extends Shape
{
    /**
     * @param array{location: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
