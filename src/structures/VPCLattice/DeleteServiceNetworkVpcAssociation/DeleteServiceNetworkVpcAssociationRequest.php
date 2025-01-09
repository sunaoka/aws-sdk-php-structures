<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkVpcAssociationIdentifier
 */
class DeleteServiceNetworkVpcAssociationRequest extends Request
{
    /**
     * @param array{serviceNetworkVpcAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
