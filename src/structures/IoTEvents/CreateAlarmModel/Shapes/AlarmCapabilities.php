<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InitializationConfiguration $initializationConfiguration
 * @property AcknowledgeFlow $acknowledgeFlow
 */
class AlarmCapabilities extends Shape
{
    /**
     * @param array{
     *     initializationConfiguration?: InitializationConfiguration,
     *     acknowledgeFlow?: AcknowledgeFlow
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
