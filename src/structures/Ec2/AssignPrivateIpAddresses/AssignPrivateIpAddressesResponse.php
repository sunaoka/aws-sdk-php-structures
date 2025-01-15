<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NetworkInterfaceId
 * @property list<Shapes\AssignedPrivateIpAddress>|null $AssignedPrivateIpAddresses
 * @property list<Shapes\Ipv4PrefixSpecification>|null $AssignedIpv4Prefixes
 */
class AssignPrivateIpAddressesResponse extends Response
{
}
