<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignIpv6Addresses;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NetworkInterfaceId
 * @property list<string>|null $UnassignedIpv6Addresses
 * @property list<string>|null $UnassignedIpv6Prefixes
 */
class UnassignIpv6AddressesResponse extends Response
{
}
