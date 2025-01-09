<?php

namespace Sunaoka\Aws\Structures\GameLift\ListLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocationName
 * @property string $LocationArn
 */
class LocationModel extends Shape
{
    /**
     * @param array{
     *     LocationName?: string,
     *     LocationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
