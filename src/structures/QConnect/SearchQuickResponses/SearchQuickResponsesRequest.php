<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property Shapes\QuickResponseSearchExpression $searchExpression
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property array<string, string>|null $attributes
 */
class SearchQuickResponsesRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     searchExpression: Shapes\QuickResponseSearchExpression,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
