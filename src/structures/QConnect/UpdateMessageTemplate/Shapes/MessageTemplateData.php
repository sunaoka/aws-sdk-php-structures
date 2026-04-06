<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SYSTEM'|'AGENT'|'CUSTOMER_PROFILE'|'CUSTOM'>|null $attributeTypes
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property MessageTemplateContentProvider $content
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property MessageTemplateAttributes|null $defaultAttributes
 * @property string|null $description
 * @property GroupingConfiguration|null $groupingConfiguration
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $messageTemplateArn
 * @property string $messageTemplateContentSha256
 * @property string $messageTemplateId
 * @property string $name
 * @property array<string, string>|null $tags
 */
class MessageTemplateData extends Shape
{
    /**
     * @param array{
     *     attributeTypes?: list<'SYSTEM'|'AGENT'|'CUSTOMER_PROFILE'|'CUSTOM'>|null,
     *     channelSubtype: 'EMAIL'|'SMS',
     *     content: MessageTemplateContentProvider,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     defaultAttributes?: MessageTemplateAttributes|null,
     *     description?: string|null,
     *     groupingConfiguration?: GroupingConfiguration|null,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     messageTemplateArn: string,
     *     messageTemplateContentSha256: string,
     *     messageTemplateId: string,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
