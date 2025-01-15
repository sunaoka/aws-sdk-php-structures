<?php

namespace Sunaoka\Aws\Structures\Chime\StartMeetingTranscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EngineTranscribeSettings|null $EngineTranscribeSettings
 * @property EngineTranscribeMedicalSettings|null $EngineTranscribeMedicalSettings
 */
class TranscriptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EngineTranscribeSettings?: EngineTranscribeSettings|null,
     *     EngineTranscribeMedicalSettings?: EngineTranscribeMedicalSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
