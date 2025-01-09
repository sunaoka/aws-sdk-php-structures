<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NetworkInterfaceId
 * @property list<Shapes\AssignedPrivateIpAddress> $AssignedPrivateIpAddresses
 * @property list<Shapes\Ipv4PrefixSpecification> $AssignedIpv4Prefixes
 */
class AssignPrivateIpAddressesResponse extends Response
{
}
