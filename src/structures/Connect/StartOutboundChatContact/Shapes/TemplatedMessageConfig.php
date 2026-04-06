<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundChatContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KnowledgeBaseId
 * @property string $MessageTemplateId
 * @property TemplateAttributes $TemplateAttributes
 */
class TemplatedMessageConfig extends Shape
{
    /**
     * @param array{
     *     KnowledgeBaseId: string,
     *     MessageTemplateId: string,
     *     TemplateAttributes: TemplateAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
