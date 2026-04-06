<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventId
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $eventStatus
 * @property string|null $errorMessage
 */
class LineageInfo extends Shape
{
    /**
     * @param array{
     *     eventId?: string|null,
     *     eventStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
