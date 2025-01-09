<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AvailabilityZone> $AvailabilityZones
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4' $IpAddressType
 * @property 'on'|'off' $EnablePrefixForIpv6SourceNat
 */
class SetSubnetsResponse extends Response
{
}
