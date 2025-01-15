<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTrafficSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrafficSource
 * @property string|null $State
 * @property string|null $Identifier
 * @property string|null $Type
 */
class TrafficSourceState extends Shape
{
    /**
     * @param array{
     *     TrafficSource?: string|null,
     *     State?: string|null,
     *     Identifier?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
