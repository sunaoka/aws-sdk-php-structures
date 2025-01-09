<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 */
class MaintenanceWindowFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
