<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ClosedDaysRule>|null $EMAIL
 * @property list<ClosedDaysRule>|null $SMS
 * @property list<ClosedDaysRule>|null $PUSH
 * @property list<ClosedDaysRule>|null $VOICE
 * @property list<ClosedDaysRule>|null $CUSTOM
 */
class ClosedDays extends Shape
{
    /**
     * @param array{
     *     EMAIL?: list<ClosedDaysRule>|null,
     *     SMS?: list<ClosedDaysRule>|null,
     *     PUSH?: list<ClosedDaysRule>|null,
     *     VOICE?: list<ClosedDaysRule>|null,
     *     CUSTOM?: list<ClosedDaysRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
