<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUOUS'|'DAILY' $recordingFrequency
 * @property list<RecordingModeOverride>|null $recordingModeOverrides
 */
class RecordingMode extends Shape
{
    /**
     * @param array{
     *     recordingFrequency: 'CONTINUOUS'|'DAILY',
     *     recordingModeOverrides?: list<RecordingModeOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
