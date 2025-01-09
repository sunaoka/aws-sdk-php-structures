<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $Type
 */
class TrafficSourceIdentifier extends Shape
{
    /**
     * @param array{
     *     Identifier: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
