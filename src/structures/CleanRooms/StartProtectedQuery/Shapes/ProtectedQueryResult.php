<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryOutput $output
 */
class ProtectedQueryResult extends Shape
{
    /**
     * @param array{output: ProtectedQueryOutput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
