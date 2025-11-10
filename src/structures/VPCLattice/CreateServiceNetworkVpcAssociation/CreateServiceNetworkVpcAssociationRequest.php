<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $serviceNetworkIdentifier
 * @property string $vpcIdentifier
 * @property bool|null $privateDnsEnabled
 * @property list<string>|null $securityGroupIds
 * @property array<string, string>|null $tags
 * @property Shapes\DnsOptions|null $dnsOptions
 */
class CreateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     serviceNetworkIdentifier: string,
     *     vpcIdentifier: string,
     *     privateDnsEnabled?: bool|null,
     *     securityGroupIds?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     dnsOptions?: Shapes\DnsOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
