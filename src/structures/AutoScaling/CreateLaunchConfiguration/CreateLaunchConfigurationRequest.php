<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateLaunchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LaunchConfigurationName
 * @property string $ImageId
 * @property string $KeyName
 * @property list<string> $SecurityGroups
 * @property string $ClassicLinkVPCId
 * @property list<string> $ClassicLinkVPCSecurityGroups
 * @property string $UserData
 * @property string $InstanceId
 * @property string $InstanceType
 * @property string $KernelId
 * @property string $RamdiskId
 * @property list<Shapes\BlockDeviceMapping> $BlockDeviceMappings
 * @property Shapes\InstanceMonitoring $InstanceMonitoring
 * @property string $SpotPrice
 * @property string $IamInstanceProfile
 * @property bool $EbsOptimized
 * @property bool $AssociatePublicIpAddress
 * @property string $PlacementTenancy
 * @property Shapes\InstanceMetadataOptions $MetadataOptions
 */
class CreateLaunchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     LaunchConfigurationName: string,
     *     ImageId?: string,
     *     KeyName?: string,
     *     SecurityGroups?: list<string>,
     *     ClassicLinkVPCId?: string,
     *     ClassicLinkVPCSecurityGroups?: list<string>,
     *     UserData?: string,
     *     InstanceId?: string,
     *     InstanceType?: string,
     *     KernelId?: string,
     *     RamdiskId?: string,
     *     BlockDeviceMappings?: list<Shapes\BlockDeviceMapping>,
     *     InstanceMonitoring?: Shapes\InstanceMonitoring,
     *     SpotPrice?: string,
     *     IamInstanceProfile?: string,
     *     EbsOptimized?: bool,
     *     AssociatePublicIpAddress?: bool,
     *     PlacementTenancy?: string,
     *     MetadataOptions?: Shapes\InstanceMetadataOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
