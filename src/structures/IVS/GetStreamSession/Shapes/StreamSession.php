<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Channel $channel
 * @property \Aws\Api\DateTimeResult $endTime
 * @property IngestConfiguration $ingestConfiguration
 * @property IngestConfigurations $ingestConfigurations
 * @property RecordingConfiguration $recordingConfiguration
 * @property \Aws\Api\DateTimeResult $startTime
 * @property string $streamId
 * @property list<StreamEvent> $truncatedEvents
 */
class StreamSession extends Shape
{
    /**
     * @param array{
     *     channel?: Channel,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     ingestConfiguration?: IngestConfiguration,
     *     ingestConfigurations?: IngestConfigurations,
     *     recordingConfiguration?: RecordingConfiguration,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     streamId?: string,
     *     truncatedEvents?: list<StreamEvent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
