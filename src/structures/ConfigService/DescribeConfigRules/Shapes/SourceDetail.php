<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws.config' $EventSource
 * @property 'ConfigurationItemChangeNotification'|'ConfigurationSnapshotDeliveryCompleted'|'ScheduledNotification'|'OversizedConfigurationItemChangeNotification' $MessageType
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours' $MaximumExecutionFrequency
 */
class SourceDetail extends Shape
{
    /**
     * @param array{
     *     EventSource?: 'aws.config',
     *     MessageType?: 'ConfigurationItemChangeNotification'|'ConfigurationSnapshotDeliveryCompleted'|'ScheduledNotification'|'OversizedConfigurationItemChangeNotification',
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
