<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRAFT'|'ACTIVE'|'COMPLETED'|'CANCELLED'|'CLOSED'|'PAUSED'|null $State
 */
class JourneyStateRequest extends Shape
{
    /**
     * @param array{State?: 'DRAFT'|'ACTIVE'|'COMPLETED'|'CANCELLED'|'CLOSED'|'PAUSED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
