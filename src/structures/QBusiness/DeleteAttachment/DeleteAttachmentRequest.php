<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $conversationId
 * @property string $attachmentId
 * @property string|null $userId
 */
class DeleteAttachmentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     conversationId: string,
     *     attachmentId: string,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
