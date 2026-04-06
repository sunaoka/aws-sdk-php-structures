<?php

namespace Sunaoka\Aws\Structures\Chime\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaPipelineId
 * @property 'ChimeSdkMeeting'|null $SourceType
 * @property string|null $SourceArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null $Status
 * @property 'S3Bucket'|null $SinkType
 * @property string|null $SinkArn
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property ChimeSdkMeetingConfiguration|null $ChimeSdkMeetingConfiguration
 */
class MediaCapturePipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string|null,
     *     SourceType?: 'ChimeSdkMeeting'|null,
     *     SourceArn?: string|null,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|null,
     *     SinkType?: 'S3Bucket'|null,
     *     SinkArn?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ChimeSdkMeetingConfiguration?: ChimeSdkMeetingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
