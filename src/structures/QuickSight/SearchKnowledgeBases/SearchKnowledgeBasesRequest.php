<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchKnowledgeBases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\KnowledgeBaseSearchFilter>|null $Filters
 * @property Shapes\KnowledgeBaseSortBy|null $SortBy
 */
class SearchKnowledgeBasesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\KnowledgeBaseSearchFilter>|null,
     *     SortBy?: Shapes\KnowledgeBaseSortBy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
