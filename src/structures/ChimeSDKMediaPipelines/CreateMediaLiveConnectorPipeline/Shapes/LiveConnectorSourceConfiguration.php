<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ChimeSdkMeeting' $SourceType
 * @property ChimeSdkMeetingLiveConnectorConfiguration $ChimeSdkMeetingLiveConnectorConfiguration
 */
class LiveConnectorSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceType: 'ChimeSdkMeeting',
     *     ChimeSdkMeetingLiveConnectorConfiguration: ChimeSdkMeetingLiveConnectorConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
