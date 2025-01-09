<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteTimelineEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $incidentRecordArn
 */
class DeleteTimelineEventRequest extends Request
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
