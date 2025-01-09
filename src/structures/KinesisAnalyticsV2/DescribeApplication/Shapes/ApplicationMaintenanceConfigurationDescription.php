<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationMaintenanceWindowStartTime
 * @property string $ApplicationMaintenanceWindowEndTime
 */
class ApplicationMaintenanceConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationMaintenanceWindowStartTime: string,
     *     ApplicationMaintenanceWindowEndTime: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
