<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property string $clientToken
 * @property Shapes\MessageTemplateContentProvider $content
 * @property Shapes\MessageTemplateAttributes $defaultAttributes
 * @property string $description
 * @property Shapes\GroupingConfiguration $groupingConfiguration
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     channelSubtype: 'EMAIL'|'SMS',
     *     clientToken?: string,
     *     content: Shapes\MessageTemplateContentProvider,
     *     defaultAttributes?: Shapes\MessageTemplateAttributes,
     *     description?: string,
     *     groupingConfiguration?: Shapes\GroupingConfiguration,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
