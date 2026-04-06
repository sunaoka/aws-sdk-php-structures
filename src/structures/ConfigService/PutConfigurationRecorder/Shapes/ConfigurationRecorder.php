<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationRecorder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $roleARN
 * @property RecordingGroup|null $recordingGroup
 */
class ConfigurationRecorder extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     roleARN?: string|null,
     *     recordingGroup?: RecordingGroup|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
