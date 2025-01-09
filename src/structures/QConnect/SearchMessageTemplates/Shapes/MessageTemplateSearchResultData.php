<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property GroupingConfiguration $groupingConfiguration
 * @property bool $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $name
 * @property array<string, string> $tags
 * @property int $versionNumber
 */
class MessageTemplateSearchResultData extends Shape
{
    /**
     * @param array{
     *     channelSubtype: 'EMAIL'|'SMS',
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     groupingConfiguration?: GroupingConfiguration,
     *     isActive?: bool,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     messageTemplateArn: string,
     *     messageTemplateId: string,
     *     name: string,
     *     tags?: array<string, string>,
     *     versionNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
