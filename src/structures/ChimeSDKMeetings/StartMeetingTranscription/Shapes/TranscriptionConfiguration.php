<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\StartMeetingTranscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EngineTranscribeSettings $EngineTranscribeSettings
 * @property EngineTranscribeMedicalSettings $EngineTranscribeMedicalSettings
 */
class TranscriptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EngineTranscribeSettings?: EngineTranscribeSettings,
     *     EngineTranscribeMedicalSettings?: EngineTranscribeMedicalSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
