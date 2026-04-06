<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property string $ConnectionToken
 */
class GetAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
