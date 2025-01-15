<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchContentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
