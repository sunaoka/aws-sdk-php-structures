<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 * @property 'S3Bucket' $SinkType
 * @property string $SinkArn
 * @property string $ClientRequestToken
 * @property Shapes\ChimeSdkMeetingConfiguration $ChimeSdkMeetingConfiguration
 * @property Shapes\SseAwsKeyManagementParams $SseAwsKeyManagementParams
 * @property string $SinkIamRoleArn
 * @property list<Shapes\Tag> $Tags
 */
class CreateMediaCapturePipelineRequest extends Request
{
    /**
     * @param array{
     *     SourceType: 'ChimeSdkMeeting',
     *     SourceArn: string,
     *     SinkType: 'S3Bucket',
     *     SinkArn: string,
     *     ClientRequestToken?: string,
     *     ChimeSdkMeetingConfiguration?: Shapes\ChimeSdkMeetingConfiguration,
     *     SseAwsKeyManagementParams?: Shapes\SseAwsKeyManagementParams,
     *     SinkIamRoleArn?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
