<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataflowGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $Target
 * @property string $TargetParameter
 */
class CodeGenEdge extends Shape
{
    /**
     * @param array{
     *     Source: string,
     *     Target: string,
     *     TargetParameter?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
