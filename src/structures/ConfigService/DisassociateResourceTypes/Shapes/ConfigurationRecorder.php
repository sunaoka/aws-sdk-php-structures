<?php

namespace Sunaoka\Aws\Structures\ConfigService\DisassociateResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $roleARN
 * @property RecordingGroup $recordingGroup
 * @property RecordingMode $recordingMode
 * @property 'INTERNAL'|'PAID' $recordingScope
 * @property string $servicePrincipal
 */
class ConfigurationRecorder extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     roleARN?: string,
     *     recordingGroup?: RecordingGroup,
     *     recordingMode?: RecordingMode,
     *     recordingScope?: 'INTERNAL'|'PAID',
     *     servicePrincipal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
