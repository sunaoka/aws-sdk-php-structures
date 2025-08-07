<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocationName
 * @property int<0, max>|null $AlwaysOnCapacity
 * @property int<0, max>|null $OnDemandCapacity
 */
class LocationConfiguration extends Shape
{
    /**
     * @param array{
     *     LocationName: string,
     *     AlwaysOnCapacity?: int<0, max>|null,
     *     OnDemandCapacity?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
