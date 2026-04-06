<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associatedAlarmName
 * @property 'red'|'green' $condition
 */
class TriggerCondition extends Shape
{
    /**
     * @param array{
     *     associatedAlarmName: string,
     *     condition: 'red'|'green'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
