<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchContentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
