<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedQueryOutputConfiguration $outputConfiguration
 */
class ProtectedQueryResultConfiguration extends Shape
{
    /**
     * @param array{outputConfiguration: ProtectedQueryOutputConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
