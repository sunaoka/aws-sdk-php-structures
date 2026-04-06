<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Channel|null $channel
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property IngestConfiguration|null $ingestConfiguration
 * @property IngestConfigurations|null $ingestConfigurations
 * @property RecordingConfiguration|null $recordingConfiguration
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property string|null $streamId
 * @property list<StreamEvent>|null $truncatedEvents
 */
class StreamSession extends Shape
{
    /**
     * @param array{
     *     channel?: Channel|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     ingestConfiguration?: IngestConfiguration|null,
     *     ingestConfigurations?: IngestConfigurations|null,
     *     recordingConfiguration?: RecordingConfiguration|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     streamId?: string|null,
     *     truncatedEvents?: list<StreamEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
