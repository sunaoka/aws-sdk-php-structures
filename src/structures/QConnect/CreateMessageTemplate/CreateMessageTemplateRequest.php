<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property string|null $clientToken
 * @property Shapes\MessageTemplateContentProvider $content
 * @property Shapes\MessageTemplateAttributes|null $defaultAttributes
 * @property string|null $description
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     channelSubtype: 'EMAIL'|'SMS',
     *     clientToken?: string|null,
     *     content: Shapes\MessageTemplateContentProvider,
     *     defaultAttributes?: Shapes\MessageTemplateAttributes|null,
     *     description?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
