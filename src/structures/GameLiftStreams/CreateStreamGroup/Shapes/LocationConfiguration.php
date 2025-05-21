<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\CreateStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $AlwaysOnCapacity
 * @property string $LocationName
 * @property int<0, max>|null $OnDemandCapacity
 */
class LocationConfiguration extends Shape
{
    /**
     * @param array{
     *     AlwaysOnCapacity?: int<0, max>|null,
     *     LocationName: string,
     *     OnDemandCapacity?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
