<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddFlowSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BridgeArn
 * @property VpcInterfaceAttachment $VpcInterfaceAttachment
 */
class GatewayBridgeSource extends Shape
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
