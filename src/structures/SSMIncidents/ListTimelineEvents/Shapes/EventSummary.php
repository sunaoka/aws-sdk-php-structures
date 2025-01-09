<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListTimelineEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property list<EventReference> $eventReferences
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $eventType
 * @property \Aws\Api\DateTimeResult $eventUpdatedTime
 * @property string $incidentRecordArn
 */
class EventSummary extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     eventReferences?: list<EventReference>,
     *     eventTime: \Aws\Api\DateTimeResult,
     *     eventType: string,
     *     eventUpdatedTime: \Aws\Api\DateTimeResult,
     *     incidentRecordArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
