<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageTemplateArn
 * @property string $messageTemplateId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string|null $channel
 * @property 'EMAIL'|'SMS'|'WHATSAPP'|'PUSH' $channelSubtype
 * @property bool $isActive
 * @property int<1, max> $versionNumber
 */
class MessageTemplateVersionSummary extends Shape
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
     *     isActive: bool,
     *     versionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
