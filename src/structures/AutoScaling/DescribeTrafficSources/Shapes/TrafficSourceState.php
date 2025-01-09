<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTrafficSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrafficSource
 * @property string $State
 * @property string $Identifier
 * @property string $Type
 */
class TrafficSourceState extends Shape
{
    /**
     * @param array{
     *     TrafficSource?: string,
     *     State?: string,
     *     Identifier?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
