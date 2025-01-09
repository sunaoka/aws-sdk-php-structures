<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight' $ActiveSpeakerPosition
 */
class ActiveSpeakerOnlyConfiguration extends Shape
{
    /**
     * @param array{ActiveSpeakerPosition?: 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
