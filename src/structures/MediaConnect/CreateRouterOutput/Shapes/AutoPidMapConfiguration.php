<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<32, 8190> $StartPid
 * @property int<1, 8158> $PidsPerProgram
 */
class AutoPidMapConfiguration extends Shape
{
    /**
     * @param array{
     *     StartPid: int<32, 8190>,
     *     PidsPerProgram: int<1, 8158>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
