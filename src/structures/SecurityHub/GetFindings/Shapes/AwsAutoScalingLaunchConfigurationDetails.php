<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AssociatePublicIpAddress
 * @property list<AwsAutoScalingLaunchConfigurationBlockDeviceMappingsDetails>|null $BlockDeviceMappings
 * @property string|null $ClassicLinkVpcId
 * @property list<string>|null $ClassicLinkVpcSecurityGroups
 * @property string|null $CreatedTime
 * @property bool|null $EbsOptimized
 * @property string|null $IamInstanceProfile
 * @property string|null $ImageId
 * @property AwsAutoScalingLaunchConfigurationInstanceMonitoringDetails|null $InstanceMonitoring
 * @property string|null $InstanceType
 * @property string|null $KernelId
 * @property string|null $KeyName
 * @property string|null $LaunchConfigurationName
 * @property string|null $PlacementTenancy
 * @property string|null $RamdiskId
 * @property list<string>|null $SecurityGroups
 * @property string|null $SpotPrice
 * @property string|null $UserData
 * @property AwsAutoScalingLaunchConfigurationMetadataOptions|null $MetadataOptions
 */
class AwsAutoScalingLaunchConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool|null,
     *     BlockDeviceMappings?: list<AwsAutoScalingLaunchConfigurationBlockDeviceMappingsDetails>|null,
     *     ClassicLinkVpcId?: string|null,
     *     ClassicLinkVpcSecurityGroups?: list<string>|null,
     *     CreatedTime?: string|null,
     *     EbsOptimized?: bool|null,
     *     IamInstanceProfile?: string|null,
     *     ImageId?: string|null,
     *     InstanceMonitoring?: AwsAutoScalingLaunchConfigurationInstanceMonitoringDetails|null,
     *     InstanceType?: string|null,
     *     KernelId?: string|null,
     *     KeyName?: string|null,
     *     LaunchConfigurationName?: string|null,
     *     PlacementTenancy?: string|null,
     *     RamdiskId?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     SpotPrice?: string|null,
     *     UserData?: string|null,
     *     MetadataOptions?: AwsAutoScalingLaunchConfigurationMetadataOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
