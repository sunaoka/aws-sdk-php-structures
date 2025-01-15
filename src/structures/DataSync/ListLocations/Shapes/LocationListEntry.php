<?php

namespace Sunaoka\Aws\Structures\DataSync\ListLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocationArn
 * @property string|null $LocationUri
 */
class LocationListEntry extends Shape
{
    /**
     * @param array{
     *     LocationArn?: string|null,
     *     LocationUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
