<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $limit
 * @property string|null $rollDisposition
 */
class GdgDetailAttributes extends Shape
{
    /**
     * @param array{
     *     limit?: int|null,
     *     rollDisposition?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
