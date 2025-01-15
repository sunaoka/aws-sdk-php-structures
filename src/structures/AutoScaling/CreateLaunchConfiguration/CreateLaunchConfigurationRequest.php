<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LaunchConfigurationName
 * @property string|null $ImageId
 * @property string|null $KeyName
 * @property list<string>|null $SecurityGroups
 * @property string|null $ClassicLinkVPCId
 * @property list<string>|null $ClassicLinkVPCSecurityGroups
 * @property string|null $UserData
 * @property string|null $InstanceId
 * @property string|null $InstanceType
 * @property string|null $KernelId
 * @property string|null $RamdiskId
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 * @property Shapes\InstanceMonitoring|null $InstanceMonitoring
 * @property string|null $SpotPrice
 * @property string|null $IamInstanceProfile
 * @property bool|null $EbsOptimized
 * @property bool|null $AssociatePublicIpAddress
 * @property string|null $PlacementTenancy
 * @property Shapes\InstanceMetadataOptions|null $MetadataOptions
 */
class CreateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     LaunchConfigurationName: string,
     *     ImageId?: string|null,
     *     KeyName?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     ClassicLinkVPCId?: string|null,
     *     ClassicLinkVPCSecurityGroups?: list<string>|null,
     *     UserData?: string|null,
     *     InstanceId?: string|null,
     *     InstanceType?: string|null,
     *     KernelId?: string|null,
     *     RamdiskId?: string|null,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>|null,
     *     InstanceMonitoring?: Shapes\InstanceMonitoring|null,
     *     SpotPrice?: string|null,
     *     IamInstanceProfile?: string|null,
     *     EbsOptimized?: bool|null,
     *     AssociatePublicIpAddress?: bool|null,
     *     PlacementTenancy?: string|null,
     *     MetadataOptions?: Shapes\InstanceMetadataOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
