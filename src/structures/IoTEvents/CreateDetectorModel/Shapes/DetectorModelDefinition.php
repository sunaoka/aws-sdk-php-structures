<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<State> $states
 * @property string $initialStateName
 */
class DetectorModelDefinition extends Shape
{
    /**
     * @param array{
     *     states: list<State>,
     *     initialStateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
