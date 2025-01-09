<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $body
 * @property string $clientToken
 * @property 'ATTACHMENT' $contentDisposition
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string $name
 */
class CreateMessageTemplateAttachmentRequest extends Request
{
    /**
     * @param array{
     *     body: string,
     *     clientToken?: string,
     *     contentDisposition: 'ATTACHMENT',
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
