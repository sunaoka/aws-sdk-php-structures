<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkServiceAssociationIdentifier
 */
class DeleteServiceNetworkServiceAssociationRequest extends Request
{
    /**
     * @param array{serviceNetworkServiceAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
