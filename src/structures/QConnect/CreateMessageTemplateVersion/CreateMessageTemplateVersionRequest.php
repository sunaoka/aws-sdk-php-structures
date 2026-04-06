<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string|null $messageTemplateContentSha256
 * @property string $messageTemplateId
 */
class CreateMessageTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateContentSha256?: string|null,
     *     messageTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
