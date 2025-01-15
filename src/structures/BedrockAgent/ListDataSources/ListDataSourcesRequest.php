<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
