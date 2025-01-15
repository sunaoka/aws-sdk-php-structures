<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceConfiguration|null $SourceConfiguration
 * @property ArtifactsConfiguration|null $ArtifactsConfiguration
 */
class ChimeSdkMeetingConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceConfiguration?: SourceConfiguration|null,
     *     ArtifactsConfiguration?: ArtifactsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
