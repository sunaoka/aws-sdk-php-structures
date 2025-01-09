<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $ImageId
 * @property list<string> $IpV4Addresses
 * @property list<string> $IpV6Addresses
 * @property string $KeyName
 * @property string $IamInstanceProfileArn
 * @property string $VpcId
 * @property string $SubnetId
 * @property string $LaunchedAt
 * @property list<AwsEc2InstanceNetworkInterfacesDetails> $NetworkInterfaces
 * @property string $VirtualizationType
 * @property AwsEc2InstanceMetadataOptions $MetadataOptions
 * @property AwsEc2InstanceMonitoringDetails $Monitoring
 */
class AwsEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     ImageId?: string,
     *     IpV4Addresses?: list<string>,
     *     IpV6Addresses?: list<string>,
     *     KeyName?: string,
     *     IamInstanceProfileArn?: string,
     *     VpcId?: string,
     *     SubnetId?: string,
     *     LaunchedAt?: string,
     *     NetworkInterfaces?: list<AwsEc2InstanceNetworkInterfacesDetails>,
     *     VirtualizationType?: string,
     *     MetadataOptions?: AwsEc2InstanceMetadataOptions,
     *     Monitoring?: AwsEc2InstanceMonitoringDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
