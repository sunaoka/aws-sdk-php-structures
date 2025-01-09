<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AssociatePublicIpAddress
 * @property list<AwsAutoScalingLaunchConfigurationBlockDeviceMappingsDetails> $BlockDeviceMappings
 * @property string $ClassicLinkVpcId
 * @property list<string> $ClassicLinkVpcSecurityGroups
 * @property string $CreatedTime
 * @property bool $EbsOptimized
 * @property string $IamInstanceProfile
 * @property string $ImageId
 * @property AwsAutoScalingLaunchConfigurationInstanceMonitoringDetails $InstanceMonitoring
 * @property string $InstanceType
 * @property string $KernelId
 * @property string $KeyName
 * @property string $LaunchConfigurationName
 * @property string $PlacementTenancy
 * @property string $RamdiskId
 * @property list<string> $SecurityGroups
 * @property string $SpotPrice
 * @property string $UserData
 * @property AwsAutoScalingLaunchConfigurationMetadataOptions $MetadataOptions
 */
class AwsAutoScalingLaunchConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     AssociatePublicIpAddress?: bool,
     *     BlockDeviceMappings?: list<AwsAutoScalingLaunchConfigurationBlockDeviceMappingsDetails>,
     *     ClassicLinkVpcId?: string,
     *     ClassicLinkVpcSecurityGroups?: list<string>,
     *     CreatedTime?: string,
     *     EbsOptimized?: bool,
     *     IamInstanceProfile?: string,
     *     ImageId?: string,
     *     InstanceMonitoring?: AwsAutoScalingLaunchConfigurationInstanceMonitoringDetails,
     *     InstanceType?: string,
     *     KernelId?: string,
     *     KeyName?: string,
     *     LaunchConfigurationName?: string,
     *     PlacementTenancy?: string,
     *     RamdiskId?: string,
     *     SecurityGroups?: list<string>,
     *     SpotPrice?: string,
     *     UserData?: string,
     *     MetadataOptions?: AwsAutoScalingLaunchConfigurationMetadataOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
