<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MessageTemplateAttachment> $attachments
 * @property list<'SYSTEM'|'AGENT'|'CUSTOMER_PROFILE'|'CUSTOM'> $attributeTypes
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property MessageTemplateContentProvider $content
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property MessageTemplateAttributes $defaultAttributes
 * @property string $description
 * @property GroupingConfiguration $groupingConfiguration
 * @property bool $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $messageTemplateArn
 * @property string $messageTemplateContentSha256
 * @property string $messageTemplateId
 * @property string $name
 * @property array<string, string> $tags
 * @property int<1, max> $versionNumber
 */
class ExtendedMessageTemplateData extends Shape
{
    /**
     * @param array{
     *     attachments?: list<MessageTemplateAttachment>,
     *     attributeTypes?: list<'SYSTEM'|'AGENT'|'CUSTOMER_PROFILE'|'CUSTOM'>,
     *     channelSubtype: 'EMAIL'|'SMS',
     *     content: MessageTemplateContentProvider,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     defaultAttributes?: MessageTemplateAttributes,
     *     description?: string,
     *     groupingConfiguration?: GroupingConfiguration,
     *     isActive?: bool,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     messageTemplateArn: string,
     *     messageTemplateContentSha256: string,
     *     messageTemplateId: string,
     *     name: string,
     *     tags?: array<string, string>,
     *     versionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
