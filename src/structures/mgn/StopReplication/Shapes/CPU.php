<?php

namespace Sunaoka\Aws\Structures\mgn\StopReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $cores
 * @property string $modelName
 */
class CPU extends Shape
{
    /**
     * @param array{
     *     cores?: int<0, max>,
     *     modelName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
