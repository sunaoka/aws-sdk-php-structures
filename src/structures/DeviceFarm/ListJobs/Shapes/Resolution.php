<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $width
 * @property int|null $height
 */
class Resolution extends Shape
{
    /**
     * @param array{
     *     width?: int|null,
     *     height?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
