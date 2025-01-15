<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $ImageId
 * @property list<string>|null $IpV4Addresses
 * @property list<string>|null $IpV6Addresses
 * @property string|null $KeyName
 * @property string|null $IamInstanceProfileArn
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $LaunchedAt
 * @property list<AwsEc2InstanceNetworkInterfacesDetails>|null $NetworkInterfaces
 * @property string|null $VirtualizationType
 * @property AwsEc2InstanceMetadataOptions|null $MetadataOptions
 * @property AwsEc2InstanceMonitoringDetails|null $Monitoring
 */
class AwsEc2InstanceDetails extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     ImageId?: string|null,
     *     IpV4Addresses?: list<string>|null,
     *     IpV6Addresses?: list<string>|null,
     *     KeyName?: string|null,
     *     IamInstanceProfileArn?: string|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     LaunchedAt?: string|null,
     *     NetworkInterfaces?: list<AwsEc2InstanceNetworkInterfacesDetails>|null,
     *     VirtualizationType?: string|null,
     *     MetadataOptions?: AwsEc2InstanceMetadataOptions|null,
     *     Monitoring?: AwsEc2InstanceMonitoringDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
