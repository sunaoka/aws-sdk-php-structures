<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logStreamName
 * @property list<Shapes\InputLogEvent> $logEvents
 * @property string $sequenceToken
 * @property Shapes\Entity $entity
 */
class PutLogEventsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logStreamName: string,
     *     logEvents: list<Shapes\InputLogEvent>,
     *     sequenceToken?: string,
     *     entity?: Shapes\Entity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
