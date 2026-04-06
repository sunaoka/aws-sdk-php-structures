<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactRecording\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FROM_AGENT'|'TO_AGENT'|'ALL'|null $VoiceRecordingTrack
 * @property 'ALL'|null $IvrRecordingTrack
 */
class VoiceRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     VoiceRecordingTrack?: 'FROM_AGENT'|'TO_AGENT'|'ALL'|null,
     *     IvrRecordingTrack?: 'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
