<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BridgeArn
 * @property VpcInterfaceAttachment|null $VpcInterfaceAttachment
 */
class SetGatewayBridgeSourceRequest extends Shape
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     VpcInterfaceAttachment?: VpcInterfaceAttachment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
