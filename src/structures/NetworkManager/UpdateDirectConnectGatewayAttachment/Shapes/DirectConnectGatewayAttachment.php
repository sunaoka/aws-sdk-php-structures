<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateDirectConnectGatewayAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property string|null $DirectConnectGatewayArn
 */
class DirectConnectGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     DirectConnectGatewayArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
