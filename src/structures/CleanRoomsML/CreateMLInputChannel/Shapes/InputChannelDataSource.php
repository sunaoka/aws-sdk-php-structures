<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryInputParameters $protectedQueryInputParameters
 */
class InputChannelDataSource extends Shape
{
    /**
     * @param array{protectedQueryInputParameters?: ProtectedQueryInputParameters} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
