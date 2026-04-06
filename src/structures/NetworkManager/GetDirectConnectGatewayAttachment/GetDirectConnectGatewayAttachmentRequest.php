<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetDirectConnectGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 */
class GetDirectConnectGatewayAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
