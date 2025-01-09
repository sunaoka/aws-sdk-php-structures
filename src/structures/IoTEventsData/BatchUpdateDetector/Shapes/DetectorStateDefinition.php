<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchUpdateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateName
 * @property list<VariableDefinition> $variables
 * @property list<TimerDefinition> $timers
 */
class DetectorStateDefinition extends Shape
{
    /**
     * @param array{
     *     stateName: string,
     *     variables: list<VariableDefinition>,
     *     timers: list<TimerDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
