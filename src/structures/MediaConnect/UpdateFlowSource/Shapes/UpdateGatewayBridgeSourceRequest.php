<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BridgeArn
 * @property VpcInterfaceAttachment|null $VpcInterfaceAttachment
 */
class UpdateGatewayBridgeSourceRequest extends Shape
{
    /**
     * @param array{
     *     BridgeArn?: string|null,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
