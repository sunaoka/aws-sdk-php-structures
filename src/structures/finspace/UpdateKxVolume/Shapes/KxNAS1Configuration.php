<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSD_1000'|'SSD_250'|'HDD_12' $type
 * @property int $size
 */
class KxNAS1Configuration extends Shape
{
    /**
     * @param array{
     *     type?: 'SSD_1000'|'SSD_250'|'HDD_12',
     *     size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
