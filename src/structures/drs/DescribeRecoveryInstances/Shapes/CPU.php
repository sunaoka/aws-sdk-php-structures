<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $cores
 * @property string|null $modelName
 */
class CPU extends Shape
{
    /**
     * @param array{
     *     cores?: int<0, max>|null,
     *     modelName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
