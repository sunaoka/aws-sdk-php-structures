<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventTypeId
 * @property string|null $ServiceName
 * @property string|null $EventTypeName
 * @property string|null $ResourceType
 */
class EventTypeSummary extends Shape
{
    /**
     * @param array{
     *     EventTypeId?: string|null,
     *     ServiceName?: string|null,
     *     EventTypeName?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
