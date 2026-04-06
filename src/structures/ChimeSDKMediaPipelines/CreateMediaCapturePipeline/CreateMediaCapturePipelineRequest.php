<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 * @property 'S3Bucket' $SinkType
 * @property string $SinkArn
 * @property string|null $ClientRequestToken
 * @property Shapes\ChimeSdkMeetingConfiguration|null $ChimeSdkMeetingConfiguration
 * @property Shapes\SseAwsKeyManagementParams|null $SseAwsKeyManagementParams
 * @property string|null $SinkIamRoleArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMediaCapturePipelineRequest extends Request
{
    /**
     * @param array{
     *     SourceType: 'ChimeSdkMeeting',
     *     SourceArn: string,
     *     SinkType: 'S3Bucket',
     *     SinkArn: string,
     *     ClientRequestToken?: string|null,
     *     ChimeSdkMeetingConfiguration?: Shapes\ChimeSdkMeetingConfiguration|null,
     *     SseAwsKeyManagementParams?: Shapes\SseAwsKeyManagementParams|null,
     *     SinkIamRoleArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
