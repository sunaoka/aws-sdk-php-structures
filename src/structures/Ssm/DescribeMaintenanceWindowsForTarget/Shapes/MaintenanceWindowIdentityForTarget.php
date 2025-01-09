<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowsForTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $Name
 */
class MaintenanceWindowIdentityForTarget extends Shape
{
    /**
     * @param array{
     *     WindowId?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
