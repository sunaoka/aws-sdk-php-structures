<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeVpcEndpointAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcEndpointAssociationArn
 */
class DescribeVpcEndpointAssociationRequest extends Request
{
    /**
     * @param array{VpcEndpointAssociationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
