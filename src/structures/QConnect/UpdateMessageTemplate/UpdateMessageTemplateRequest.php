<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property Shapes\MessageTemplateContentProvider|null $content
 * @property string|null $language
 * @property Shapes\MessageTemplateAttributes|null $defaultAttributes
 */
class UpdateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     content?: Shapes\MessageTemplateContentProvider|null,
     *     language?: string|null,
     *     defaultAttributes?: Shapes\MessageTemplateAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
