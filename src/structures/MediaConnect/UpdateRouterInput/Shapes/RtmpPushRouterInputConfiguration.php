<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1935, 1935> $Port
 * @property 'MANUAL'|'AUTOMATIC'|null $NamingType
 * @property RtmpPushNamingConfiguration $NamingConfiguration
 */
class RtmpPushRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     Port: int<1935, 1935>,
     *     NamingType?: 'MANUAL'|'AUTOMATIC'|null,
     *     NamingConfiguration: RtmpPushNamingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
