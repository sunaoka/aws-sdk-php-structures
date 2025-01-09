<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineId
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped' $Status
 * @property 'S3Bucket' $SinkType
 * @property string $SinkArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property ChimeSdkMeetingConfiguration $ChimeSdkMeetingConfiguration
 */
class MediaCapturePipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string,
     *     SourceType?: 'ChimeSdkMeeting',
     *     SourceArn?: string,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped',
     *     SinkType?: 'S3Bucket',
     *     SinkArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ChimeSdkMeetingConfiguration?: ChimeSdkMeetingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
