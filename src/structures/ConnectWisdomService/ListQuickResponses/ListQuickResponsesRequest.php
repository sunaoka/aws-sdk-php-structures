<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListQuickResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListQuickResponsesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
