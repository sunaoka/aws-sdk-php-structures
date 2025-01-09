<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaPipelineArn
 * @property ChimeSdkMeetingConcatenationConfiguration $ChimeSdkMeetingConfiguration
 */
class MediaCapturePipelineSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     MediaPipelineArn: string,
     *     ChimeSdkMeetingConfiguration: ChimeSdkMeetingConcatenationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
