<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTaskWithMaintenanceWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLogGroupName
 * @property bool|null $CloudWatchOutputEnabled
 */
class CloudWatchOutputConfig extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogGroupName?: string|null,
     *     CloudWatchOutputEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
