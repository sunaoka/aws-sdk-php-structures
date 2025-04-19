<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $name
 * @property Shapes\MessageTemplateContentProvider $content
 * @property string|null $description
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property string|null $language
 * @property Shapes\MessageTemplateAttributes|null $defaultAttributes
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     name: string,
     *     content: Shapes\MessageTemplateContentProvider,
     *     description?: string|null,
     *     channelSubtype: 'EMAIL'|'SMS',
     *     language?: string|null,
     *     defaultAttributes?: Shapes\MessageTemplateAttributes|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
