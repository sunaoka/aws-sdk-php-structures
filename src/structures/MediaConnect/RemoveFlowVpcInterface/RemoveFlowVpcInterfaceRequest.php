<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveFlowVpcInterface;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property string $VpcInterfaceName
 */
class RemoveFlowVpcInterfaceRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     VpcInterfaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
