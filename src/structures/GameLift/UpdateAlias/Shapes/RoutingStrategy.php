<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SIMPLE'|'TERMINAL'|null $Type
 * @property string|null $FleetId
 * @property string|null $Message
 */
class RoutingStrategy extends Shape
{
    /**
     * @param array{
     *     Type?: 'SIMPLE'|'TERMINAL'|null,
     *     FleetId?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
