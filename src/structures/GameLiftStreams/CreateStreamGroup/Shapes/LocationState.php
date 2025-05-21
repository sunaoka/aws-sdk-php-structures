<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $AllocatedCapacity
 * @property int<0, max>|null $AlwaysOnCapacity
 * @property int<0, max>|null $IdleCapacity
 * @property string|null $LocationName
 * @property int<0, max>|null $OnDemandCapacity
 * @property int<0, max>|null $RequestedCapacity
 * @property 'ACTIVATING'|'ACTIVE'|'ERROR'|'REMOVING'|null $Status
 */
class LocationState extends Shape
{
    /**
     * @param array{
     *     AllocatedCapacity?: int<0, max>|null,
     *     AlwaysOnCapacity?: int<0, max>|null,
     *     IdleCapacity?: int<0, max>|null,
     *     LocationName?: string|null,
     *     OnDemandCapacity?: int<0, max>|null,
     *     RequestedCapacity?: int<0, max>|null,
     *     Status?: 'ACTIVATING'|'ACTIVE'|'ERROR'|'REMOVING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
