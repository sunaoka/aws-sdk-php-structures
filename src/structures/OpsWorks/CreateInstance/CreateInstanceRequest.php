<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property list<string> $LayerIds
 * @property string $InstanceType
 * @property 'load'|'timer' $AutoScalingType
 * @property string $Hostname
 * @property string $Os
 * @property string $AmiId
 * @property string $SshKeyName
 * @property string $AvailabilityZone
 * @property string $VirtualizationType
 * @property string $SubnetId
 * @property 'x86_64'|'i386' $Architecture
 * @property 'ebs'|'instance-store' $RootDeviceType
 * @property list<Shapes\BlockDeviceMapping> $BlockDeviceMappings
 * @property bool $InstallUpdatesOnBoot
 * @property bool $EbsOptimized
 * @property string $AgentVersion
 * @property string $Tenancy
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     LayerIds: list<string>,
     *     InstanceType: string,
     *     AutoScalingType?: 'load'|'timer',
     *     Hostname?: string,
     *     Os?: string,
     *     AmiId?: string,
     *     SshKeyName?: string,
     *     AvailabilityZone?: string,
     *     VirtualizationType?: string,
     *     SubnetId?: string,
     *     Architecture?: 'x86_64'|'i386',
     *     RootDeviceType?: 'ebs'|'instance-store',
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>,
     *     InstallUpdatesOnBoot?: bool,
     *     EbsOptimized?: bool,
     *     AgentVersion?: string,
     *     Tenancy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
