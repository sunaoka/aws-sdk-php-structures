<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OTAJobConfig $OTAJobConfig
 */
class DeviceJobConfig extends Shape
{
    /**
     * @param array{OTAJobConfig?: OTAJobConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
