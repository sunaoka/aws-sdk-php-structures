<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventTypeId
 * @property string $ServiceName
 * @property string $EventTypeName
 * @property string $ResourceType
 */
class EventTypeSummary extends Shape
{
    /**
     * @param array{
     *     EventTypeId?: string,
     *     ServiceName?: string,
     *     EventTypeName?: string,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
