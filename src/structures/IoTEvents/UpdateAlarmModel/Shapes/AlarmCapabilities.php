<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InitializationConfiguration|null $initializationConfiguration
 * @property AcknowledgeFlow|null $acknowledgeFlow
 */
class AlarmCapabilities extends Shape
{
    /**
     * @param array{
     *     initializationConfiguration?: InitializationConfiguration|null,
     *     acknowledgeFlow?: AcknowledgeFlow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
