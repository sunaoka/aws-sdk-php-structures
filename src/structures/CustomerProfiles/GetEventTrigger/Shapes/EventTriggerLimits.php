<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $EventExpiration
 * @property list<Period> $Periods
 */
class EventTriggerLimits extends Shape
{
    /**
     * @param array{
     *     EventExpiration?: int,
     *     Periods?: list<Period>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
