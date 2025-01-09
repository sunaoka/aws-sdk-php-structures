<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $activeVersionNumber
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $name
 * @property array<string, string> $tags
 */
class MessageTemplateSummary extends Shape
{
    /**
     * @param array{
     *     activeVersionNumber?: int<1, max>,
     *     channelSubtype: 'EMAIL'|'SMS',
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     messageTemplateArn: string,
     *     messageTemplateId: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
