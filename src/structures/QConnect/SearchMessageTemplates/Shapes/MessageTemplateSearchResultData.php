<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property GroupingConfiguration|null $groupingConfiguration
 * @property bool|null $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $name
 * @property array<string, string>|null $tags
 * @property int<1, max>|null $versionNumber
 */
class MessageTemplateSearchResultData extends Shape
{
    /**
     * @param array{
     *     channelSubtype: 'EMAIL'|'SMS',
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     groupingConfiguration?: GroupingConfiguration|null,
     *     isActive?: bool|null,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     messageTemplateArn: string,
     *     messageTemplateId: string,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     versionNumber?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
