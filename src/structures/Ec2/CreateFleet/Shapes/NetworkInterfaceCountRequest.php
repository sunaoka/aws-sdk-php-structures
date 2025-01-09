<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Min
 * @property int $Max
 */
class NetworkInterfaceCountRequest extends Shape
{
    /**
     * @param array{
     *     Min?: int,
     *     Max?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
