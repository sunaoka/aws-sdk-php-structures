<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MessageTemplateContentProvider $content
 * @property Shapes\MessageTemplateAttributes $defaultAttributes
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $messageTemplateId
 */
class UpdateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     content?: Shapes\MessageTemplateContentProvider,
     *     defaultAttributes?: Shapes\MessageTemplateAttributes,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     messageTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
