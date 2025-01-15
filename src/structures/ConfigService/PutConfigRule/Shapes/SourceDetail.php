<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws.config'|null $EventSource
 * @property 'ConfigurationItemChangeNotification'|'ConfigurationSnapshotDeliveryCompleted'|'ScheduledNotification'|'OversizedConfigurationItemChangeNotification'|null $MessageType
 * @property 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null $MaximumExecutionFrequency
 */
class SourceDetail extends Shape
{
    /**
     * @param array{
     *     EventSource?: 'aws.config'|null,
     *     MessageType?: 'ConfigurationItemChangeNotification'|'ConfigurationSnapshotDeliveryCompleted'|'ScheduledNotification'|'OversizedConfigurationItemChangeNotification'|null,
     *     MaximumExecutionFrequency?: 'One_Hour'|'Three_Hours'|'Six_Hours'|'Twelve_Hours'|'TwentyFour_Hours'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
