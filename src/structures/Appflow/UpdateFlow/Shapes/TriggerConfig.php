<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Scheduled'|'Event'|'OnDemand' $triggerType
 * @property TriggerProperties|null $triggerProperties
 */
class TriggerConfig extends Shape
{
    /**
     * @param array{
     *     triggerType: 'Scheduled'|'Event'|'OnDemand',
     *     triggerProperties?: TriggerProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
