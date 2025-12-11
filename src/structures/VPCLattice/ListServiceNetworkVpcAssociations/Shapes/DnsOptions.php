<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VERIFIED_DOMAINS_ONLY'|'ALL_DOMAINS'|'VERIFIED_DOMAINS_AND_SPECIFIED_DOMAINS'|'SPECIFIED_DOMAINS_ONLY'|null $privateDnsPreference
 * @property list<string>|null $privateDnsSpecifiedDomains
 */
class DnsOptions extends Shape
{
    /**
     * @param array{
     *     privateDnsPreference?: 'VERIFIED_DOMAINS_ONLY'|'ALL_DOMAINS'|'VERIFIED_DOMAINS_AND_SPECIFIED_DOMAINS'|'SPECIFIED_DOMAINS_ONLY'|null,
     *     privateDnsSpecifiedDomains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
