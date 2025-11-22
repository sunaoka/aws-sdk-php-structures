<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string|null $channel
 * @property 'EMAIL'|'SMS'|'WHATSAPP'|'PUSH' $channelSubtype
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $lastModifiedBy
 * @property bool|null $isActive
 * @property int<1, max>|null $versionNumber
 * @property string|null $description
 * @property MessageTemplateSourceConfigurationSummary|null $sourceConfigurationSummary
 * @property GroupingConfiguration|null $groupingConfiguration
 * @property string|null $language
 * @property array<string, string>|null $tags
 */
class MessageTemplateSearchResultData extends Shape
{
    /**
     * @param array{
     *     messageTemplateArn: string,
     *     messageTemplateId: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     channel?: string|null,
     *     channelSubtype: 'EMAIL'|'SMS'|'WHATSAPP'|'PUSH',
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     lastModifiedBy: string,
     *     isActive?: bool|null,
     *     versionNumber?: int<1, max>|null,
     *     description?: string|null,
     *     sourceConfigurationSummary?: MessageTemplateSourceConfigurationSummary|null,
     *     groupingConfiguration?: GroupingConfiguration|null,
     *     language?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
