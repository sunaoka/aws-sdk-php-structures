<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AvailabilityZone>|null $AvailabilityZones
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null $IpAddressType
 * @property 'on'|'off'|null $EnablePrefixForIpv6SourceNat
 */
class SetSubnetsResponse extends Response
{
}
