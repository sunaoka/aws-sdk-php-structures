<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Scheduled'|'Event'|'OnDemand' $TriggerType
 * @property TriggerProperties|null $TriggerProperties
 */
class TriggerConfig extends Shape
{
    /**
     * @param array{
     *     TriggerType: 'Scheduled'|'Event'|'OnDemand',
     *     TriggerProperties?: TriggerProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
