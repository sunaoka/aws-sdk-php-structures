<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactRecording\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FROM_AGENT'|'TO_AGENT'|'ALL' $VoiceRecordingTrack
 * @property 'ALL' $IvrRecordingTrack
 */
class VoiceRecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     VoiceRecordingTrack?: 'FROM_AGENT'|'TO_AGENT'|'ALL',
     *     IvrRecordingTrack?: 'ALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
