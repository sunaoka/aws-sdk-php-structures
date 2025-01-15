<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DayOfWeek
 * @property string|null $TimeOfDay
 * @property string|null $TimeZone
 */
class AwsAmazonMqBrokerMaintenanceWindowStartTimeDetails extends Shape
{
    /**
     * @param array{
     *     DayOfWeek?: string|null,
     *     TimeOfDay?: string|null,
     *     TimeZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
