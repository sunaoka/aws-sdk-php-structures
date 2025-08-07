<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocationName
 * @property 'ACTIVATING'|'ACTIVE'|'ERROR'|'REMOVING'|null $Status
 * @property int<0, max>|null $AlwaysOnCapacity
 * @property int<0, max>|null $OnDemandCapacity
 * @property int<0, max>|null $RequestedCapacity
 * @property int<0, max>|null $AllocatedCapacity
 * @property int<0, max>|null $IdleCapacity
 */
class LocationState extends Shape
{
    /**
     * @param array{
     *     LocationName?: string|null,
     *     Status?: 'ACTIVATING'|'ACTIVE'|'ERROR'|'REMOVING'|null,
     *     AlwaysOnCapacity?: int<0, max>|null,
     *     OnDemandCapacity?: int<0, max>|null,
     *     RequestedCapacity?: int<0, max>|null,
     *     AllocatedCapacity?: int<0, max>|null,
     *     IdleCapacity?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
