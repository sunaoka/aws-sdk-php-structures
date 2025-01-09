<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AttachmentId
 * @property string $ConnectionToken
 * @property int $UrlExpiryInSeconds
 */
class GetAttachmentRequest extends Request
{
    /**
     * @param array{
     *     AttachmentId: string,
     *     ConnectionToken: string,
     *     UrlExpiryInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
