<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\StartAttachmentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContentType
 * @property int $AttachmentSizeInBytes
 * @property string $AttachmentName
 * @property string $ClientToken
 * @property string $ConnectionToken
 */
class StartAttachmentUploadRequest extends Request
{
    /**
     * @param array{
     *     ContentType: string,
     *     AttachmentSizeInBytes: int,
     *     AttachmentName: string,
     *     ClientToken: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
