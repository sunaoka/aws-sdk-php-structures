<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateJobForDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowMajorVersionUpdate
 * @property string $ImageVersion
 */
class OTAJobConfig extends Shape
{
    /**
     * @param array{
     *     AllowMajorVersionUpdate?: bool|null,
     *     ImageVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
