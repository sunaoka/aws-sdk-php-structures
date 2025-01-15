<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateTimelineEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $eventData
 * @property list<Shapes\EventReference>|null $eventReferences
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $eventType
 * @property string $incidentRecordArn
 */
class CreateTimelineEventRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     eventData: string,
     *     eventReferences?: list<Shapes\EventReference>|null,
     *     eventTime: \Aws\Api\DateTimeResult,
     *     eventType: string,
     *     incidentRecordArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
