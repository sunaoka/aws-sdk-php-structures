<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 100>|null $maxResults
 * @property string $messageTemplateId
 * @property string|null $nextToken
 */
class ListMessageTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>|null,
     *     messageTemplateId: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
