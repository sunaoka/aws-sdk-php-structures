<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $bytes
 * @property string $deviceName
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     bytes?: int<0, max>,
     *     deviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
