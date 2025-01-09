<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property VpcInterfaceAttachment $FlowVpcInterfaceAttachment
 */
class UpdateBridgeFlowSourceRequest extends Shape
{
    /**
     * @param array{
     *     FlowArn?: string,
     *     FlowVpcInterfaceAttachment?: VpcInterfaceAttachment
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
