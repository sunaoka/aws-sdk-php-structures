<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AcceptAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 */
class AcceptAttachmentRequest extends Request
{
    /**
     * @param array{AttachmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
