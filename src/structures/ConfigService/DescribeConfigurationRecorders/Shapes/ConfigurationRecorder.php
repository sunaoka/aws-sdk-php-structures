<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $roleARN
 * @property RecordingGroup|null $recordingGroup
 * @property RecordingMode|null $recordingMode
 * @property 'INTERNAL'|'PAID'|null $recordingScope
 * @property string|null $servicePrincipal
 */
class ConfigurationRecorder extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     roleARN?: string|null,
     *     recordingGroup?: RecordingGroup|null,
     *     recordingMode?: RecordingMode|null,
     *     recordingScope?: 'INTERNAL'|'PAID'|null,
     *     servicePrincipal?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
