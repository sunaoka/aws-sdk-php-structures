<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Scheduled'|'Event'|'OnDemand' $TriggerType
 * @property TriggerProperties $TriggerProperties
 */
class TriggerConfig extends Shape
{
    /**
     * @param array{
     *     TriggerType: 'Scheduled'|'Event'|'OnDemand',
     *     TriggerProperties?: TriggerProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
