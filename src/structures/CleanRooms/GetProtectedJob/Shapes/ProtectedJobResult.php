<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobOutput $output
 */
class ProtectedJobResult extends Shape
{
    /**
     * @param array{output: ProtectedJobOutput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
