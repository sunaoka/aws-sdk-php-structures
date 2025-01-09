<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $bytes
 * @property string $deviceName
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     bytes?: int,
     *     deviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
