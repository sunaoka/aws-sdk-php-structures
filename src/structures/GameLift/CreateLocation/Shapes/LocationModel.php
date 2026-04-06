<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocationName
 * @property string|null $LocationArn
 * @property PingBeacon|null $PingBeacon
 */
class LocationModel extends Shape
{
    /**
     * @param array{
     *     LocationName?: string|null,
     *     LocationArn?: string|null,
     *     PingBeacon?: PingBeacon|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
