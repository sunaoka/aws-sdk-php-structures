<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $knowledgeBaseId
 */
class ListMessageTemplatesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
