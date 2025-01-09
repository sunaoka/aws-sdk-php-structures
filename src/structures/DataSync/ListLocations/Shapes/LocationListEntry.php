<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocationArn
 * @property string $LocationUri
 */
class LocationListEntry extends Shape
{
    /**
     * @param array{
     *     LocationArn?: string,
     *     LocationUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
