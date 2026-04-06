<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $knowledgeBaseId
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchContentRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     knowledgeBaseId: string,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
