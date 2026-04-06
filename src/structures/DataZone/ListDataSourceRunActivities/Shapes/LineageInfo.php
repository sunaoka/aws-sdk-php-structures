<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 * @property string|null $eventId
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $eventStatus
 */
class LineageInfo extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string|null,
     *     eventId?: string|null,
     *     eventStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
