<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property VpcInterfaceAttachment|null $FlowVpcInterfaceAttachment
 * @property string $Name
 * @property string|null $OutputArn
 */
class BridgeFlowSource extends Shape
{
    /**
     * @param array{
     *     FlowArn: string,
     *     FlowVpcInterfaceAttachment?: VpcInterfaceAttachment|null,
     *     Name: string,
     *     OutputArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
