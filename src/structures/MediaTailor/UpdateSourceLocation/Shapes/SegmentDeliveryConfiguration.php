<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateSourceLocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseUrl
 * @property string $Name
 */
class SegmentDeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     BaseUrl?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
