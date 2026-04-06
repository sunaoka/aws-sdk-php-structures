<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioArtifactsConfiguration $Audio
 * @property VideoArtifactsConfiguration $Video
 * @property ContentArtifactsConfiguration $Content
 */
class ArtifactsConfiguration extends Shape
{
    /**
     * @param array{
     *     Audio: AudioArtifactsConfiguration,
     *     Video: VideoArtifactsConfiguration,
     *     Content: ContentArtifactsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
