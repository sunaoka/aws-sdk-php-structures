<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationRecorder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUOUS'|'DAILY' $recordingFrequency
 * @property list<RecordingModeOverride> $recordingModeOverrides
 */
class RecordingMode extends Shape
{
    /**
     * @param array{
     *     recordingFrequency: 'CONTINUOUS'|'DAILY',
     *     recordingModeOverrides?: list<RecordingModeOverride>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
