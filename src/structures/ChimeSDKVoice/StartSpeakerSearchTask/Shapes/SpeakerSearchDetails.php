<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SpeakerSearchResult>|null $Results
 * @property string|null $VoiceprintGenerationStatus
 */
class SpeakerSearchDetails extends Shape
{
    /**
     * @param array{
     *     Results?: list<SpeakerSearchResult>|null,
     *     VoiceprintGenerationStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
