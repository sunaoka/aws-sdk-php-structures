<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 * @property string $eventId
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED' $eventStatus
 */
class LineageInfo extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string,
     *     eventId?: string,
     *     eventStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
