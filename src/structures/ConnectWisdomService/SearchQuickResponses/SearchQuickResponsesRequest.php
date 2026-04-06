<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchQuickResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $attributes
 * @property string $knowledgeBaseId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\QuickResponseSearchExpression $searchExpression
 */
class SearchQuickResponsesRequest extends Request
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     searchExpression: Shapes\QuickResponseSearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
