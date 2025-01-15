<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceId
 * @property string|null $JobId
 */
class Job extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     JobId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
