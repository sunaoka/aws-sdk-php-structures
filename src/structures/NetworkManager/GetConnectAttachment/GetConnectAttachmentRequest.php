<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 */
class GetConnectAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
