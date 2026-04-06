<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlatformName
 * @property string|null $PlatformVersion
 * @property string|null $OperatingSystem
 */
class DeviceInfo extends Shape
{
    /**
     * @param array{
     *     PlatformName?: string|null,
     *     PlatformVersion?: string|null,
     *     OperatingSystem?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
