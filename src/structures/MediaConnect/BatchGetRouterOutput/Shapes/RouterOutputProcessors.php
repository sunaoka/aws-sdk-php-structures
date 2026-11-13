<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SingleProgramTransportStreamPidMapConfiguration|null $SingleProgramTransportStreamPidMap
 */
class RouterOutputProcessors extends Shape
{
    /**
     * @param array{SingleProgramTransportStreamPidMap?: SingleProgramTransportStreamPidMapConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
