<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cpu
 * @property string $memory
 * @property string|null $disk
 */
class MaximumAllowedResources extends Shape
{
    /**
     * @param array{
     *     cpu: string,
     *     memory: string,
     *     disk?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
