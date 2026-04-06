<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property list<string> $LayerIds
 * @property string $InstanceType
 * @property 'load'|'timer'|null $AutoScalingType
 * @property string|null $Hostname
 * @property string|null $Os
 * @property string|null $AmiId
 * @property string|null $SshKeyName
 * @property string|null $AvailabilityZone
 * @property string|null $VirtualizationType
 * @property string|null $SubnetId
 * @property 'x86_64'|'i386'|null $Architecture
 * @property 'ebs'|'instance-store'|null $RootDeviceType
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 * @property bool|null $InstallUpdatesOnBoot
 * @property bool|null $EbsOptimized
 * @property string|null $AgentVersion
 * @property string|null $Tenancy
 */
class CreateInstanceRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     LayerIds: list<string>,
     *     InstanceType: string,
     *     AutoScalingType?: 'load'|'timer'|null,
     *     Hostname?: string|null,
     *     Os?: string|null,
     *     AmiId?: string|null,
     *     SshKeyName?: string|null,
     *     AvailabilityZone?: string|null,
     *     VirtualizationType?: string|null,
     *     SubnetId?: string|null,
     *     Architecture?: 'x86_64'|'i386'|null,
     *     RootDeviceType?: 'ebs'|'instance-store'|null,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>|null,
     *     InstallUpdatesOnBoot?: bool|null,
     *     EbsOptimized?: bool|null,
     *     AgentVersion?: string|null,
     *     Tenancy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
