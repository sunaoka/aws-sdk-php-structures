<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupId
 * @property string $groupName
 */
class SecurityGroupIdentifier extends Shape
{
    /**
     * @param array{
     *     groupId?: string,
     *     groupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
