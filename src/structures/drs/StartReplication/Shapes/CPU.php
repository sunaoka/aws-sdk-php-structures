<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $cores
 * @property string $modelName
 */
class CPU extends Shape
{
    /**
     * @param array{
     *     cores?: int,
     *     modelName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
