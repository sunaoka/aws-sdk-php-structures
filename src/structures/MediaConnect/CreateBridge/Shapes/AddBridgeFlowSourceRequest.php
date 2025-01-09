<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property VpcInterfaceAttachment $FlowVpcInterfaceAttachment
 * @property string $Name
 */
class AddBridgeFlowSourceRequest extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     FlowVpcInterfaceAttachment?: VpcInterfaceAttachment,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
