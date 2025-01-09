<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetTimelineEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $incidentRecordArn
 */
class GetTimelineEventRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     incidentRecordArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
