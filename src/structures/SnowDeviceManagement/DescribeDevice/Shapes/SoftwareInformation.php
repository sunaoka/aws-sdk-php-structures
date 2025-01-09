<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $installState
 * @property string $installedVersion
 * @property string $installingVersion
 */
class SoftwareInformation extends Shape
{
    /**
     * @param array{
     *     installState?: string,
     *     installedVersion?: string,
     *     installingVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
