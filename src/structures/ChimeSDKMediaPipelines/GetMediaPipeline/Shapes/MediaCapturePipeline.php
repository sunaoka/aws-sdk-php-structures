<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineId
 * @property string $MediaPipelineArn
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 * @property 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted' $Status
 * @property 'S3Bucket' $SinkType
 * @property string $SinkArn
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property ChimeSdkMeetingConfiguration $ChimeSdkMeetingConfiguration
 * @property SseAwsKeyManagementParams $SseAwsKeyManagementParams
 * @property string $SinkIamRoleArn
 */
class MediaCapturePipeline extends Shape
{
    /**
     * @param array{
     *     MediaPipelineId?: string,
     *     MediaPipelineArn?: string,
     *     SourceType?: 'ChimeSdkMeeting',
     *     SourceArn?: string,
     *     Status?: 'Initializing'|'InProgress'|'Failed'|'Stopping'|'Stopped'|'Paused'|'NotStarted',
     *     SinkType?: 'S3Bucket',
     *     SinkArn?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ChimeSdkMeetingConfiguration?: ChimeSdkMeetingConfiguration,
     *     SseAwsKeyManagementParams?: SseAwsKeyManagementParams,
     *     SinkIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
