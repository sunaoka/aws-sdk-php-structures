<?php

namespace Sunaoka\Aws\Structures\QConnect\RenderMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MessageTemplateAttributes $attributes
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 */
class RenderMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     attributes: Shapes\MessageTemplateAttributes,
     *     knowledgeBaseId: string,
     *     messageTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
