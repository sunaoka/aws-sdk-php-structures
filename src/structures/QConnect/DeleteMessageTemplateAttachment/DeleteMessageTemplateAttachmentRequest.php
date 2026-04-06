<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteMessageTemplateAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $attachmentId
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 */
class DeleteMessageTemplateAttachmentRequest extends Request
{
    /**
     * @param array{
     *     attachmentId: string,
     *     knowledgeBaseId: string,
     *     messageTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
