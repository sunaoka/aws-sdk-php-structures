<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateLaunchProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEACTIVATED'|'ACTIVATED'|null $automaticTerminationMode
 * @property 'ENABLED'|'DISABLED' $clipboardMode
 * @property list<'g4dn.xlarge'|'g4dn.2xlarge'|'g4dn.4xlarge'|'g4dn.8xlarge'|'g4dn.12xlarge'|'g4dn.16xlarge'|'g3.4xlarge'|'g3s.xlarge'|'g5.xlarge'|'g5.2xlarge'|'g5.4xlarge'|'g5.8xlarge'|'g5.16xlarge'> $ec2InstanceTypes
 * @property int<1, 43200>|null $maxSessionLengthInMinutes
 * @property int<0, 5760>|null $maxStoppedSessionLengthInMinutes
 * @property StreamConfigurationSessionBackup|null $sessionBackup
 * @property 'DEACTIVATED'|'ACTIVATED'|null $sessionPersistenceMode
 * @property StreamConfigurationSessionStorage|null $sessionStorage
 * @property list<string> $streamingImageIds
 * @property VolumeConfiguration|null $volumeConfiguration
 */
class StreamConfigurationCreate extends Shape
{
    /**
     * @param array{
     *     automaticTerminationMode?: 'DEACTIVATED'|'ACTIVATED'|null,
     *     clipboardMode: 'ENABLED'|'DISABLED',
     *     ec2InstanceTypes: list<'g4dn.xlarge'|'g4dn.2xlarge'|'g4dn.4xlarge'|'g4dn.8xlarge'|'g4dn.12xlarge'|'g4dn.16xlarge'|'g3.4xlarge'|'g3s.xlarge'|'g5.xlarge'|'g5.2xlarge'|'g5.4xlarge'|'g5.8xlarge'|'g5.16xlarge'>,
     *     maxSessionLengthInMinutes?: int<1, 43200>|null,
     *     maxStoppedSessionLengthInMinutes?: int<0, 5760>|null,
     *     sessionBackup?: StreamConfigurationSessionBackup|null,
     *     sessionPersistenceMode?: 'DEACTIVATED'|'ACTIVATED'|null,
     *     sessionStorage?: StreamConfigurationSessionStorage|null,
     *     streamingImageIds: list<string>,
     *     volumeConfiguration?: VolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
