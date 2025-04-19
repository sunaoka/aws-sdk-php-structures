<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $messageTemplateId
 * @property string $knowledgeBaseId
 */
class GetMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     messageTemplateId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
