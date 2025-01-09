<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetTransitGatewayRouteTableAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 */
class GetTransitGatewayRouteTableAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
