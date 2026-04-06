<?php

namespace Sunaoka\Aws\Structures\QConnect\RenderMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property Shapes\MessageTemplateAttributes $attributes
 */
class RenderMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     attributes: Shapes\MessageTemplateAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
