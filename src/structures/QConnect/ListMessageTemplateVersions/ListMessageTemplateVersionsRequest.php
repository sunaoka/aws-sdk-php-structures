<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $messageTemplateId
 * @property string $nextToken
 */
class ListMessageTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     messageTemplateId: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
