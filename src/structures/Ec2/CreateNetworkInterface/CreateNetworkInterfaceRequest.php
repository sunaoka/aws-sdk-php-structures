<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property list<string>|null $Groups
 * @property int|null $Ipv6AddressCount
 * @property list<Shapes\InstanceIpv6Address>|null $Ipv6Addresses
 * @property string|null $PrivateIpAddress
 * @property list<Shapes\PrivateIpAddressSpecification>|null $PrivateIpAddresses
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property list<Shapes\Ipv4PrefixSpecificationRequest>|null $Ipv4Prefixes
 * @property int|null $Ipv4PrefixCount
 * @property list<Shapes\Ipv6PrefixSpecificationRequest>|null $Ipv6Prefixes
 * @property int|null $Ipv6PrefixCount
 * @property 'efa'|'branch'|'trunk'|null $InterfaceType
 * @property string $SubnetId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $EnablePrimaryIpv6
 */
class CreateNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     Groups?: list<string>|null,
     *     Ipv6AddressCount?: int|null,
     *     Ipv6Addresses?: list<Shapes\InstanceIpv6Address>|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<Shapes\PrivateIpAddressSpecification>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     Ipv4Prefixes?: list<Shapes\Ipv4PrefixSpecificationRequest>|null,
     *     Ipv4PrefixCount?: int|null,
     *     Ipv6Prefixes?: list<Shapes\Ipv6PrefixSpecificationRequest>|null,
     *     Ipv6PrefixCount?: int|null,
     *     InterfaceType?: 'efa'|'branch'|'trunk'|null,
     *     SubnetId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     EnablePrimaryIpv6?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
