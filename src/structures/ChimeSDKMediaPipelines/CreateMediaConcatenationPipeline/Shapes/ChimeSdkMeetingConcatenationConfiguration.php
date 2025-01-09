<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArtifactsConcatenationConfiguration $ArtifactsConfiguration
 */
class ChimeSdkMeetingConcatenationConfiguration extends Shape
{
    /**
     * @param array{ArtifactsConfiguration: ArtifactsConcatenationConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
