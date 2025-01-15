<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowArn
 * @property VpcInterfaceAttachment|null $FlowVpcInterfaceAttachment
 */
class UpdateBridgeFlowSourceRequest extends Shape
{
    /**
     * @param array{
     *     FlowArn?: string|null,
     *     FlowVpcInterfaceAttachment?: VpcInterfaceAttachment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
