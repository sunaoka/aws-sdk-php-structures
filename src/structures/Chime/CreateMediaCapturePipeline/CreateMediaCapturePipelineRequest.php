<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMediaCapturePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ChimeSdkMeeting' $SourceType
 * @property string $SourceArn
 * @property 'S3Bucket' $SinkType
 * @property string $SinkArn
 * @property string|null $ClientRequestToken
 * @property Shapes\ChimeSdkMeetingConfiguration|null $ChimeSdkMeetingConfiguration
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
     *     ChimeSdkMeetingConfiguration?: Shapes\ChimeSdkMeetingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
