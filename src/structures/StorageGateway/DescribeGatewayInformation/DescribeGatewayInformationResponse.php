<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeGatewayInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property string|null $GatewayId
 * @property string|null $GatewayName
 * @property string|null $GatewayTimezone
 * @property string|null $GatewayState
 * @property list<Shapes\NetworkInterface>|null $GatewayNetworkInterfaces
 * @property string|null $GatewayType
 * @property string|null $NextUpdateAvailabilityDate
 * @property string|null $LastSoftwareUpdate
 * @property string|null $Ec2InstanceId
 * @property string|null $Ec2InstanceRegion
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $VPCEndpoint
 * @property string|null $CloudWatchLogGroupARN
 * @property 'VMWARE'|'HYPER-V'|'EC2'|'KVM'|'OTHER'|'SNOWBALL'|null $HostEnvironment
 * @property string|null $EndpointType
 * @property string|null $SoftwareUpdatesEndDate
 * @property string|null $DeprecationDate
 * @property 'Small'|'Medium'|'Large'|null $GatewayCapacity
 * @property list<'Small'|'Medium'|'Large'>|null $SupportedGatewayCapacities
 * @property string|null $HostEnvironmentId
 * @property string|null $SoftwareVersion
 */
class DescribeGatewayInformationResponse extends Response
{
}
