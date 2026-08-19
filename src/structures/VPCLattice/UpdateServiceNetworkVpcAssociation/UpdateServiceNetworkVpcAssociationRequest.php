<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkVpcAssociationIdentifier
 * @property list<string>|null $securityGroupIds
 * @property bool|null $privateDnsEnabled
 * @property Shapes\DnsOptions|null $dnsOptions
 */
class UpdateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkVpcAssociationIdentifier: string,
     *     securityGroupIds?: list<string>|null,
     *     privateDnsEnabled?: bool|null,
     *     dnsOptions?: Shapes\DnsOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
