<?php

namespace Sunaoka\Aws\Structures\Glue\CreateScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $Target
 * @property string|null $TargetParameter
 */
class CodeGenEdge extends Shape
{
    /**
     * @param array{
     *     Source: string,
     *     Target: string,
     *     TargetParameter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
