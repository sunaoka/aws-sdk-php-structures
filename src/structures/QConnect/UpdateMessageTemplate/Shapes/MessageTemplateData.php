<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $name
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $lastModifiedBy
 * @property MessageTemplateContentProvider $content
 * @property string|null $description
 * @property string|null $language
 * @property GroupingConfiguration|null $groupingConfiguration
 * @property MessageTemplateAttributes|null $defaultAttributes
 * @property list<'SYSTEM'|'AGENT'|'CUSTOMER_PROFILE'|'CUSTOM'>|null $attributeTypes
 * @property string $messageTemplateContentSha256
 * @property array<string, string>|null $tags
 */
class MessageTemplateData extends Shape
{
    /**
     * @param array{
     *     messageTemplateArn: string,
     *     messageTemplateId: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     channelSubtype: 'EMAIL'|'SMS',
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     lastModifiedBy: string,
     *     content: MessageTemplateContentProvider,
     *     description?: string|null,
     *     language?: string|null,
     *     groupingConfiguration?: GroupingConfiguration|null,
     *     defaultAttributes?: MessageTemplateAttributes|null,
     *     attributeTypes?: list<'SYSTEM'|'AGENT'|'CUSTOMER_PROFILE'|'CUSTOM'>|null,
     *     messageTemplateContentSha256: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
