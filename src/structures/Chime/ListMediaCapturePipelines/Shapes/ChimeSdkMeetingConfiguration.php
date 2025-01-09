<?php

namespace Sunaoka\Aws\Structures\Chime\ListMediaCapturePipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceConfiguration $SourceConfiguration
 * @property ArtifactsConfiguration $ArtifactsConfiguration
 */
class ChimeSdkMeetingConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceConfiguration?: SourceConfiguration,
     *     ArtifactsConfiguration?: ArtifactsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
