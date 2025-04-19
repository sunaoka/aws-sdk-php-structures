<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

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
 * @property list<MessageTemplateAttachment>|null $attachments
 * @property bool|null $isActive
 * @property int<1, max>|null $versionNumber
 * @property string $messageTemplateContentSha256
 * @property array<string, string>|null $tags
 */
class ExtendedMessageTemplateData extends Shape
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
     *     attachments?: list<MessageTemplateAttachment>|null,
     *     isActive?: bool|null,
     *     versionNumber?: int<1, max>|null,
     *     messageTemplateContentSha256: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
