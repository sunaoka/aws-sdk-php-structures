<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkResourceAssociationIdentifier
 */
class DeleteServiceNetworkResourceAssociationRequest extends Request
{
    /**
     * @param array{serviceNetworkResourceAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
