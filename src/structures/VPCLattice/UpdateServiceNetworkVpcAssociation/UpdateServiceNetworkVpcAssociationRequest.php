<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $securityGroupIds
 * @property string $serviceNetworkVpcAssociationIdentifier
 */
class UpdateServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{
     *     securityGroupIds: list<string>,
     *     serviceNetworkVpcAssociationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
