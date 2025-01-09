<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property string $OperatingSystem
 */
class DeviceInfo extends Shape
{
    /**
     * @param array{
     *     PlatformName?: string,
     *     PlatformVersion?: string,
     *     OperatingSystem?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
