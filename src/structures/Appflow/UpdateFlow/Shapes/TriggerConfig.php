<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Scheduled'|'Event'|'OnDemand' $triggerType
 * @property TriggerProperties $triggerProperties
 */
class TriggerConfig extends Shape
{
    /**
     * @param array{
     *     triggerType: 'Scheduled'|'Event'|'OnDemand',
     *     triggerProperties?: TriggerProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
