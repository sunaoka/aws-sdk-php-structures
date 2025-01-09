<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RejectAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 */
class RejectAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
