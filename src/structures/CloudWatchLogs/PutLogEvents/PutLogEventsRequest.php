<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $logStreamName
 * @property list<Shapes\InputLogEvent> $logEvents
 * @property string|null $sequenceToken
 * @property Shapes\Entity|null $entity
 */
class PutLogEventsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logStreamName: string,
     *     logEvents: list<Shapes\InputLogEvent>,
     *     sequenceToken?: string|null,
     *     entity?: Shapes\Entity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
