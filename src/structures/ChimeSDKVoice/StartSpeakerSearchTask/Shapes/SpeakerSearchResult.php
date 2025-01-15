<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $ConfidenceScore
 * @property string|null $VoiceProfileId
 */
class SpeakerSearchResult extends Shape
{
    /**
     * @param array{
     *     ConfidenceScore?: float|null,
     *     VoiceProfileId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
