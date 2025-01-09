<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateContentSha256
 * @property string $messageTemplateId
 */
class CreateMessageTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateContentSha256?: string,
     *     messageTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
