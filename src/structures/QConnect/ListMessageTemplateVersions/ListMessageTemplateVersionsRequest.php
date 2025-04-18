<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListMessageTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
