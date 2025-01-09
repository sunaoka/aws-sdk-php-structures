<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetServiceNetworkServiceAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkServiceAssociationIdentifier
 */
class GetServiceNetworkServiceAssociationRequest extends Request
{
    /**
     * @param array{serviceNetworkServiceAssociationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
