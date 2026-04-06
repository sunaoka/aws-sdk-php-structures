<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property 'ATTACHMENT' $contentDisposition
 * @property string $name
 * @property string $body
 * @property string|null $clientToken
 */
class CreateMessageTemplateAttachmentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     contentDisposition: 'ATTACHMENT',
     *     name: string,
     *     body: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
