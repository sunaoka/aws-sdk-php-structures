<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchConfigurationName
 * @property string|null $LaunchConfigurationARN
 * @property string $ImageId
 * @property string|null $KeyName
 * @property list<string>|null $SecurityGroups
 * @property string|null $ClassicLinkVPCId
 * @property list<string>|null $ClassicLinkVPCSecurityGroups
 * @property string|null $UserData
 * @property string $InstanceType
 * @property string|null $KernelId
 * @property string|null $RamdiskId
 * @property list<BlockDeviceMapping>|null $BlockDeviceMappings
 * @property InstanceMonitoring|null $InstanceMonitoring
 * @property string|null $SpotPrice
 * @property string|null $IamInstanceProfile
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property bool|null $EbsOptimized
 * @property bool|null $AssociatePublicIpAddress
 * @property string|null $PlacementTenancy
 * @property InstanceMetadataOptions|null $MetadataOptions
 */
class LaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     LaunchConfigurationName: string,
     *     LaunchConfigurationARN?: string|null,
     *     ImageId: string,
     *     KeyName?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     ClassicLinkVPCId?: string|null,
     *     ClassicLinkVPCSecurityGroups?: list<string>|null,
     *     UserData?: string|null,
     *     InstanceType: string,
     *     KernelId?: string|null,
     *     RamdiskId?: string|null,
     *     BlockDeviceMappings?: list<BlockDeviceMapping>|null,
     *     InstanceMonitoring?: InstanceMonitoring|null,
     *     SpotPrice?: string|null,
     *     IamInstanceProfile?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     EbsOptimized?: bool|null,
     *     AssociatePublicIpAddress?: bool|null,
     *     PlacementTenancy?: string|null,
     *     MetadataOptions?: InstanceMetadataOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
