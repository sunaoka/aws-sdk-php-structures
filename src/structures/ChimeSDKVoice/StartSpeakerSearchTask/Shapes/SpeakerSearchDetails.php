<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SpeakerSearchResult> $Results
 * @property string $VoiceprintGenerationStatus
 */
class SpeakerSearchDetails extends Shape
{
    /**
     * @param array{
     *     Results?: list<SpeakerSearchResult>,
     *     VoiceprintGenerationStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
