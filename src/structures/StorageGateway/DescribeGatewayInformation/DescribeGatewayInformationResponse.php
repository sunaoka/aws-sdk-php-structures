<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeGatewayInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property string $GatewayId
 * @property string $GatewayName
 * @property string $GatewayTimezone
 * @property string $GatewayState
 * @property list<Shapes\NetworkInterface> $GatewayNetworkInterfaces
 * @property string $GatewayType
 * @property string $NextUpdateAvailabilityDate
 * @property string $LastSoftwareUpdate
 * @property string $Ec2InstanceId
 * @property string $Ec2InstanceRegion
 * @property list<Shapes\Tag> $Tags
 * @property string $VPCEndpoint
 * @property string $CloudWatchLogGroupARN
 * @property 'VMWARE'|'HYPER-V'|'EC2'|'KVM'|'OTHER'|'SNOWBALL' $HostEnvironment
 * @property string $EndpointType
 * @property string $SoftwareUpdatesEndDate
 * @property string $DeprecationDate
 * @property 'Small'|'Medium'|'Large' $GatewayCapacity
 * @property list<'Small'|'Medium'|'Large'> $SupportedGatewayCapacities
 * @property string $HostEnvironmentId
 * @property string $SoftwareVersion
 */
class DescribeGatewayInformationResponse extends Response
{
}
