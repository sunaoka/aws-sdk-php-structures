<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cpu
 * @property string $memory
 * @property string|null $disk
 * @property string|null $diskType
 */
class WorkerResourceConfig extends Shape
{
    /**
     * @param array{
     *     cpu: string,
     *     memory: string,
     *     disk?: string|null,
     *     diskType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
