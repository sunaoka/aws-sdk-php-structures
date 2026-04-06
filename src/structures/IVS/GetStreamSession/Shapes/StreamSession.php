<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streamId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Channel|null $channel
 * @property IngestConfiguration|null $ingestConfiguration
 * @property RecordingConfiguration|null $recordingConfiguration
 * @property list<StreamEvent>|null $truncatedEvents
 */
class StreamSession extends Shape
{
    /**
     * @param array{
     *     streamId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     channel?: Channel|null,
     *     ingestConfiguration?: IngestConfiguration|null,
     *     recordingConfiguration?: RecordingConfiguration|null,
     *     truncatedEvents?: list<StreamEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
