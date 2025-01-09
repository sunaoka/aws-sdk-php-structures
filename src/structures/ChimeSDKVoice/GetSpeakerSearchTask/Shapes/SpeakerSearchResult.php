<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $ConfidenceScore
 * @property string $VoiceProfileId
 */
class SpeakerSearchResult extends Shape
{
    /**
     * @param array{
     *     ConfidenceScore?: float,
     *     VoiceProfileId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
