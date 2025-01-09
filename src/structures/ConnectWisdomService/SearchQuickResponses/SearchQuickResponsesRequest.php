<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchQuickResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $attributes
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\QuickResponseSearchExpression $searchExpression
 */
class SearchQuickResponsesRequest extends Request
{
    /**
     * @param array{
     *     attributes?: array<string, string>,
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchExpression: Shapes\QuickResponseSearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
