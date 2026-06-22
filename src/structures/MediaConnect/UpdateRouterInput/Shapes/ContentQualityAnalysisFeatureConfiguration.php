<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlackFramesConfiguration|null $BlackFrames
 * @property FrozenFramesConfiguration|null $FrozenFrames
 * @property SilentAudioConfiguration|null $SilentAudio
 */
class ContentQualityAnalysisFeatureConfiguration extends Shape
{
    /**
     * @param array{
     *     BlackFrames?: BlackFramesConfiguration|null,
     *     FrozenFrames?: FrozenFramesConfiguration|null,
     *     SilentAudio?: SilentAudioConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
