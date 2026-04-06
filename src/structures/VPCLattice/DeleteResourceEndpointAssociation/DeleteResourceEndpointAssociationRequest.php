<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceEndpointAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceEndpointAssociationIdentifier
 */
class DeleteResourceEndpointAssociationRequest extends Request
{
    /**
     * @param array{resourceEndpointAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
