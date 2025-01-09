<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowMajorVersionUpdate
 * @property string $ImageVersion
 */
class OTAJobConfig extends Shape
{
    /**
     * @param array{
     *     AllowMajorVersionUpdate?: bool,
     *     ImageVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
