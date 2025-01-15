<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioArtifactsConfiguration $Audio
 * @property VideoArtifactsConfiguration $Video
 * @property ContentArtifactsConfiguration $Content
 * @property CompositedVideoArtifactsConfiguration|null $CompositedVideo
 */
class ArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     Audio: AudioArtifactsConfiguration,
     *     Video: VideoArtifactsConfiguration,
     *     Content: ContentArtifactsConfiguration,
     *     CompositedVideo?: CompositedVideoArtifactsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
