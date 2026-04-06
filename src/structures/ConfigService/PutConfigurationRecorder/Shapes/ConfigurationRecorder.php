<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationRecorder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $roleARN
 * @property RecordingGroup|null $recordingGroup
 * @property RecordingMode|null $recordingMode
 */
class ConfigurationRecorder extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     roleARN?: string|null,
     *     recordingGroup?: RecordingGroup|null,
     *     recordingMode?: RecordingMode|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
