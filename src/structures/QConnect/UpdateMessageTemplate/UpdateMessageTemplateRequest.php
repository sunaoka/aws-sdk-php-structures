<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MessageTemplateContentProvider|null $content
 * @property Shapes\MessageTemplateAttributes|null $defaultAttributes
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string $messageTemplateId
 */
class UpdateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     content?: Shapes\MessageTemplateContentProvider|null,
     *     defaultAttributes?: Shapes\MessageTemplateAttributes|null,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     messageTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
