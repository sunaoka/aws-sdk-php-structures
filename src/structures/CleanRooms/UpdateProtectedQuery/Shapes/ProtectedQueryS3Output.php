<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 */
class ProtectedQueryS3Output extends Shape
{
    /**
     * @param array{location: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
