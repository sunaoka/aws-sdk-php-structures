<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $bytes
 * @property string|null $deviceName
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     bytes?: int<0, max>|null,
     *     deviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
