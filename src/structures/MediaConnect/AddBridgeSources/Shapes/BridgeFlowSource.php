<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property VpcInterfaceAttachment $FlowVpcInterfaceAttachment
 * @property string $Name
 * @property string $OutputArn
 */
class BridgeFlowSource extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     FlowVpcInterfaceAttachment?: VpcInterfaceAttachment,
     *     Name: string,
     *     OutputArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
