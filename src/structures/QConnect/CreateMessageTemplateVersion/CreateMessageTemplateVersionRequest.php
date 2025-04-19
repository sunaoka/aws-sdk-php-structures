<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string|null $messageTemplateContentSha256
 */
class CreateMessageTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     messageTemplateContentSha256?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
