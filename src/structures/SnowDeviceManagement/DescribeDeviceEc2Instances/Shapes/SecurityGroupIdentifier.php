<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupId
 * @property string|null $groupName
 */
class SecurityGroupIdentifier extends Shape
{
    /**
     * @param array{
     *     groupId?: string|null,
     *     groupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
