<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClosedDaysRule> $EMAIL
 * @property list<ClosedDaysRule> $SMS
 * @property list<ClosedDaysRule> $PUSH
 * @property list<ClosedDaysRule> $VOICE
 * @property list<ClosedDaysRule> $CUSTOM
 */
class ClosedDays extends Shape
{
    /**
     * @param array{
     *     EMAIL?: list<ClosedDaysRule>,
     *     SMS?: list<ClosedDaysRule>,
     *     PUSH?: list<ClosedDaysRule>,
     *     VOICE?: list<ClosedDaysRule>,
     *     CUSTOM?: list<ClosedDaysRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
