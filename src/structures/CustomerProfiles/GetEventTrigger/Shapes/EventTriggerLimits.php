<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $EventExpiration
 * @property list<Period>|null $Periods
 */
class EventTriggerLimits extends Shape
{
    /**
     * @param array{
     *     EventExpiration?: int|null,
     *     Periods?: list<Period>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
