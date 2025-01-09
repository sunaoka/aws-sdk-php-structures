<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SIMPLE'|'TERMINAL' $Type
 * @property string $FleetId
 * @property string $Message
 */
class RoutingStrategy extends Shape
{
    /**
     * @param array{
     *     Type?: 'SIMPLE'|'TERMINAL',
     *     FleetId?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
