<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property int<0, max>|null $bytes
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     bytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
