<?php

namespace Sunaoka\Aws\Structures\Chime\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AudioOnly'|'AudioWithActiveSpeakerVideo' $MuxType
 */
class AudioArtifactsConfiguration extends Shape
{
    /**
     * @param array{MuxType: 'AudioOnly'|'AudioWithActiveSpeakerVideo'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
