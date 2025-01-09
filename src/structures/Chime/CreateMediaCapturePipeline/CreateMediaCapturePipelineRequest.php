<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMediaCapturePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 * @property 'S3Bucket' $SinkType
 * @property string $SinkArn
 * @property string $ClientRequestToken
 * @property Shapes\ChimeSdkMeetingConfiguration $ChimeSdkMeetingConfiguration
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
     *     ChimeSdkMeetingConfiguration?: Shapes\ChimeSdkMeetingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
