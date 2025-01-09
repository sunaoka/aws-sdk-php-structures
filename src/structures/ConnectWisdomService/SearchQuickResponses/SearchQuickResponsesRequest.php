<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchQuickResponses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $attributes
 * @property string $knowledgeBaseId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\QuickResponseSearchExpression $searchExpression
 */
class SearchQuickResponsesRequest extends Request
{
    /**
     * @param array{
     *     attributes?: array<string, string>,
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     searchExpression: Shapes\QuickResponseSearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
