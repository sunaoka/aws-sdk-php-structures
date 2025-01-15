<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListSourceLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BaseUrl
 * @property string|null $Name
 */
class SegmentDeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     BaseUrl?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
