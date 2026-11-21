<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventsByWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventActorId
 * @property string|null $EventActorValue
 */
class EventActorReference extends Shape
{
    /**
     * @param array{
     *     EventActorId?: string|null,
     *     EventActorValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
