<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
