<?php

namespace Sunaoka\Aws\Structures\GameLift\ListLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocationName
 * @property string|null $LocationArn
 */
class LocationModel extends Shape
{
    /**
     * @param array{
     *     LocationName?: string|null,
     *     LocationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
