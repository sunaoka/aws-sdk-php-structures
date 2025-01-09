<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowVpcInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property list<Shapes\VpcInterfaceRequest> $VpcInterfaces
 */
class AddFlowVpcInterfacesRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     VpcInterfaces: list<Shapes\VpcInterfaceRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
