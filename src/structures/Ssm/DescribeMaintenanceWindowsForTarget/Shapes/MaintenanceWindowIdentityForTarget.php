<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowsForTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowId
 * @property string|null $Name
 */
class MaintenanceWindowIdentityForTarget extends Shape
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
