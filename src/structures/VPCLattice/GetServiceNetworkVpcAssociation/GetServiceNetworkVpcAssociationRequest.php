<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkVpcAssociationIdentifier
 */
class GetServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{serviceNetworkVpcAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
