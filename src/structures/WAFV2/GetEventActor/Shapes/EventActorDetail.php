<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEventActor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventActorDetailSummary $Summary
 * @property list<RelatedEvent>|null $Events
 * @property list<EventActorChange>|null $Changes
 */
class EventActorDetail extends Shape
{
    /**
     * @param array{
     *     Summary: EventActorDetailSummary,
     *     Events?: list<RelatedEvent>|null,
     *     Changes?: list<EventActorChange>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
