<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cpu
 * @property string $memory
 * @property string $disk
 * @property string $diskType
 */
class WorkerResourceConfig extends Shape
{
    /**
     * @param array{
     *     cpu: string,
     *     memory: string,
     *     disk?: string,
     *     diskType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
