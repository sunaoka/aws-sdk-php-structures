<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CompleteAttachmentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AttachmentIds
 * @property string $ClientToken
 * @property string $ConnectionToken
 */
class CompleteAttachmentUploadRequest extends Request
{
    /**
     * @param array{
     *     AttachmentIds: list<string>,
     *     ClientToken: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
