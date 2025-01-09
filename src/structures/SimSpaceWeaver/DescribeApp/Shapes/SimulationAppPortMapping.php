<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Actual
 * @property int $Declared
 */
class SimulationAppPortMapping extends Shape
{
    /**
     * @param array{
     *     Actual?: int,
     *     Declared?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
