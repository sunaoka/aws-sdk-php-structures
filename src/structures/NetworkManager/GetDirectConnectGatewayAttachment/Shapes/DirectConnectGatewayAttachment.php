<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDirectConnectGatewayAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment $Attachment
 * @property string $DirectConnectGatewayArn
 */
class DirectConnectGatewayAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment,
     *     DirectConnectGatewayArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
