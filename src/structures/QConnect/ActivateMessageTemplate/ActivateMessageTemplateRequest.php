<?php

namespace Sunaoka\Aws\Structures\QConnect\ActivateMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property int<1, max> $versionNumber
 */
class ActivateMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     versionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
