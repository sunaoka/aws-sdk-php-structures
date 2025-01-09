<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLaunchConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchConfigurationName
 * @property string $LaunchConfigurationARN
 * @property string $ImageId
 * @property string $KeyName
 * @property list<string> $SecurityGroups
 * @property string $ClassicLinkVPCId
 * @property list<string> $ClassicLinkVPCSecurityGroups
 * @property string $UserData
 * @property string $InstanceType
 * @property string $KernelId
 * @property string $RamdiskId
 * @property list<BlockDeviceMapping> $BlockDeviceMappings
 * @property InstanceMonitoring $InstanceMonitoring
 * @property string $SpotPrice
 * @property string $IamInstanceProfile
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property bool $EbsOptimized
 * @property bool $AssociatePublicIpAddress
 * @property string $PlacementTenancy
 * @property InstanceMetadataOptions $MetadataOptions
 */
class LaunchConfiguration extends Shape
{
    /**
     * @param array{
     *     LaunchConfigurationName: string,
     *     LaunchConfigurationARN?: string,
     *     ImageId: string,
     *     KeyName?: string,
     *     SecurityGroups?: list<string>,
     *     ClassicLinkVPCId?: string,
     *     ClassicLinkVPCSecurityGroups?: list<string>,
     *     UserData?: string,
     *     InstanceType: string,
     *     KernelId?: string,
     *     RamdiskId?: string,
     *     BlockDeviceMappings?: list<BlockDeviceMapping>,
     *     InstanceMonitoring?: InstanceMonitoring,
     *     SpotPrice?: string,
     *     IamInstanceProfile?: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     EbsOptimized?: bool,
     *     AssociatePublicIpAddress?: bool,
     *     PlacementTenancy?: string,
     *     MetadataOptions?: InstanceMetadataOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
