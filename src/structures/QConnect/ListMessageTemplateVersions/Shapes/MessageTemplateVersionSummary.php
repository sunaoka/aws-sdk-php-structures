<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'SMS' $channelSubtype
 * @property bool $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $name
 * @property int $versionNumber
 */
class MessageTemplateVersionSummary extends Shape
{
    /**
     * @param array{
     *     channelSubtype: 'EMAIL'|'SMS',
     *     isActive: bool,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     messageTemplateArn: string,
     *     messageTemplateId: string,
     *     name: string,
     *     versionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
