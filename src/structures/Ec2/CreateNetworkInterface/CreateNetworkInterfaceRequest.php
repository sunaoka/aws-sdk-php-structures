<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Ipv4PrefixSpecificationRequest>|null $Ipv4Prefixes
 * @property int|null $Ipv4PrefixCount
 * @property list<Shapes\Ipv6PrefixSpecificationRequest>|null $Ipv6Prefixes
 * @property int|null $Ipv6PrefixCount
 * @property 'efa'|'efa-only'|'branch'|'trunk'|null $InterfaceType
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $EnablePrimaryIpv6
 * @property Shapes\ConnectionTrackingSpecificationRequest|null $ConnectionTrackingSpecification
 * @property Shapes\OperatorRequest|null $Operator
 * @property string $SubnetId
 * @property string|null $Description
 * @property string|null $PrivateIpAddress
 * @property list<string>|null $Groups
 * @property list<Shapes\PrivateIpAddressSpecification>|null $PrivateIpAddresses
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property list<Shapes\InstanceIpv6Address>|null $Ipv6Addresses
 * @property int|null $Ipv6AddressCount
 * @property bool|null $DryRun
 */
class CreateNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     Ipv4Prefixes?: list<Shapes\Ipv4PrefixSpecificationRequest>|null,
     *     Ipv4PrefixCount?: int|null,
     *     Ipv6Prefixes?: list<Shapes\Ipv6PrefixSpecificationRequest>|null,
     *     Ipv6PrefixCount?: int|null,
     *     InterfaceType?: 'efa'|'efa-only'|'branch'|'trunk'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     EnablePrimaryIpv6?: bool|null,
     *     ConnectionTrackingSpecification?: Shapes\ConnectionTrackingSpecificationRequest|null,
     *     Operator?: Shapes\OperatorRequest|null,
     *     SubnetId: string,
     *     Description?: string|null,
     *     PrivateIpAddress?: string|null,
     *     Groups?: list<string>|null,
     *     PrivateIpAddresses?: list<Shapes\PrivateIpAddressSpecification>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     Ipv6Addresses?: list<Shapes\InstanceIpv6Address>|null,
     *     Ipv6AddressCount?: int|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
