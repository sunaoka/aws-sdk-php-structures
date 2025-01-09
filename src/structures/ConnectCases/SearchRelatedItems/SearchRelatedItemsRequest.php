<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $domainId
 * @property list<Shapes\RelatedItemTypeFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class SearchRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     domainId: string,
     *     filters?: list<Shapes\RelatedItemTypeFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
