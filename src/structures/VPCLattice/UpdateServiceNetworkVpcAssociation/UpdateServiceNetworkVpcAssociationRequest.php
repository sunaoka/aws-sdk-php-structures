<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkVpcAssociationIdentifier
 * @property list<string> $securityGroupIds
 */
class UpdateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkVpcAssociationIdentifier: string,
     *     securityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
