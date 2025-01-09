<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkResourceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkResourceAssociationIdentifier
 */
class GetServiceNetworkResourceAssociationRequest extends Request
{
    /**
     * @param array{serviceNetworkResourceAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
