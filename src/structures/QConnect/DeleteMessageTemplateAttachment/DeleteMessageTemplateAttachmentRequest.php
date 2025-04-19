<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteMessageTemplateAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string $attachmentId
 */
class DeleteMessageTemplateAttachmentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     attachmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
