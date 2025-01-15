<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $installState
 * @property string|null $installedVersion
 * @property string|null $installingVersion
 */
class SoftwareInformation extends Shape
{
    /**
     * @param array{
     *     installState?: string|null,
     *     installedVersion?: string|null,
     *     installingVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
