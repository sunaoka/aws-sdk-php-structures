<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stateName
 * @property list<Variable> $variables
 * @property list<Timer> $timers
 */
class DetectorState extends Shape
{
    /**
     * @param array{
     *     stateName: string,
     *     variables: list<Variable>,
     *     timers: list<Timer>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
