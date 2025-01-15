<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateTimelineEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $eventData
 * @property string $eventId
 * @property list<Shapes\EventReference>|null $eventReferences
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $eventType
 * @property string $incidentRecordArn
 */
class UpdateTimelineEventRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     eventData?: string|null,
     *     eventId: string,
     *     eventReferences?: list<Shapes\EventReference>|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     eventType?: string|null,
     *     incidentRecordArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
