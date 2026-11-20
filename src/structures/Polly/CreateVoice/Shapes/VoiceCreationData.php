<?php

namespace Sunaoka\Aws\Structures\Polly\CreateVoice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Recording> $Recordings
 */
class VoiceCreationData extends Shape
{
    /**
     * @param array{Recordings: list<Recording>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
