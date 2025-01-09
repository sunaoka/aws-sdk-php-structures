<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property string $JobId
 */
class Job extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string,
     *     JobId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
