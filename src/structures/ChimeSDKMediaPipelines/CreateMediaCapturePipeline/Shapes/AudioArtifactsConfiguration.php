<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AudioOnly'|'AudioWithActiveSpeakerVideo'|'AudioWithCompositedVideo' $MuxType
 */
class AudioArtifactsConfiguration extends Shape
{
    /**
     * @param array{MuxType: 'AudioOnly'|'AudioWithActiveSpeakerVideo'|'AudioWithCompositedVideo'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
