<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSD_1000'|'SSD_250'|'HDD_12' $type
 * @property int<1200, max> $size
 */
class KxNAS1Configuration extends Shape
{
    /**
     * @param array{
     *     type?: 'SSD_1000'|'SSD_250'|'HDD_12',
     *     size?: int<1200, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
