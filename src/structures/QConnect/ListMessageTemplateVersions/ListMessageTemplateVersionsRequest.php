<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 100> $maxResults
 * @property string $messageTemplateId
 * @property string $nextToken
 */
class ListMessageTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>,
     *     messageTemplateId: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
