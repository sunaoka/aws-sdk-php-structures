<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DayOfWeek
 * @property string $TimeOfDay
 * @property string $TimeZone
 */
class AwsAmazonMqBrokerMaintenanceWindowStartTimeDetails extends Shape
{
    /**
     * @param array{
     *     DayOfWeek?: string,
     *     TimeOfDay?: string,
     *     TimeZone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
