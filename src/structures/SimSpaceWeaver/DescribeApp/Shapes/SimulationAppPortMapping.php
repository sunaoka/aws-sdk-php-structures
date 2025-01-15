<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $Actual
 * @property int<0, 65535>|null $Declared
 */
class SimulationAppPortMapping extends Shape
{
    /**
     * @param array{
     *     Actual?: int<0, 65535>|null,
     *     Declared?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
