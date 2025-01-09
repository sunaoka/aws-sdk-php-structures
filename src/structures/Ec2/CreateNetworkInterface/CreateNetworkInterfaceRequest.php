<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Ipv4PrefixSpecificationRequest> $Ipv4Prefixes
 * @property int $Ipv4PrefixCount
 * @property list<Shapes\Ipv6PrefixSpecificationRequest> $Ipv6Prefixes
 * @property int $Ipv6PrefixCount
 * @property 'efa'|'efa-only'|'branch'|'trunk' $InterfaceType
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property bool $EnablePrimaryIpv6
 * @property Shapes\ConnectionTrackingSpecificationRequest $ConnectionTrackingSpecification
 * @property Shapes\OperatorRequest $Operator
 * @property string $SubnetId
 * @property string $Description
 * @property string $PrivateIpAddress
 * @property list<string> $Groups
 * @property list<Shapes\PrivateIpAddressSpecification> $PrivateIpAddresses
 * @property int $SecondaryPrivateIpAddressCount
 * @property list<Shapes\InstanceIpv6Address> $Ipv6Addresses
 * @property int $Ipv6AddressCount
 * @property bool $DryRun
 */
class CreateNetworkInterfaceRequest extends Request
{
    /**
     * @param array{
     *     Ipv4Prefixes?: list<Shapes\Ipv4PrefixSpecificationRequest>,
     *     Ipv4PrefixCount?: int,
     *     Ipv6Prefixes?: list<Shapes\Ipv6PrefixSpecificationRequest>,
     *     Ipv6PrefixCount?: int,
     *     InterfaceType?: 'efa'|'efa-only'|'branch'|'trunk',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     EnablePrimaryIpv6?: bool,
     *     ConnectionTrackingSpecification?: Shapes\ConnectionTrackingSpecificationRequest,
     *     Operator?: Shapes\OperatorRequest,
     *     SubnetId: string,
     *     Description?: string,
     *     PrivateIpAddress?: string,
     *     Groups?: list<string>,
     *     PrivateIpAddresses?: list<Shapes\PrivateIpAddressSpecification>,
     *     SecondaryPrivateIpAddressCount?: int,
     *     Ipv6Addresses?: list<Shapes\InstanceIpv6Address>,
     *     Ipv6AddressCount?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
