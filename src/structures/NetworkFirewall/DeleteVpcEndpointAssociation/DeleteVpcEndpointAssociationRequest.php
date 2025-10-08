<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteVpcEndpointAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcEndpointAssociationArn
 */
class DeleteVpcEndpointAssociationRequest extends Request
{
    /**
     * @param array{VpcEndpointAssociationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
