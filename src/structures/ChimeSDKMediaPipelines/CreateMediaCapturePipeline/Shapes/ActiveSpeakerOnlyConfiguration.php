<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight'|null $ActiveSpeakerPosition
 */
class ActiveSpeakerOnlyConfiguration extends Shape
{
    /**
     * @param array{ActiveSpeakerPosition?: 'TopLeft'|'TopRight'|'BottomLeft'|'BottomRight'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
