<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property 'AudioWithCompositedVideo'|'AudioWithActiveSpeakerVideo' $MuxType
 * @property CompositedVideoArtifactsConfiguration $CompositedVideo
 * @property SourceConfiguration $SourceConfiguration
 */
class ChimeSdkMeetingLiveConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     MuxType: 'AudioWithCompositedVideo'|'AudioWithActiveSpeakerVideo',
     *     CompositedVideo?: CompositedVideoArtifactsConfiguration,
     *     SourceConfiguration?: SourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
