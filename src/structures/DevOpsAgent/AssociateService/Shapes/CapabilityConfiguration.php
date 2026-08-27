<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property list<TriggerFilterGroup>|null $triggerFilterGroups
 */
class CapabilityConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     triggerFilterGroups?: list<TriggerFilterGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
