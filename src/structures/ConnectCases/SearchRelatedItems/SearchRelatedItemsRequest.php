<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseId
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\RelatedItemTypeFilter>|null $filters
 */
class SearchRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseId: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\RelatedItemTypeFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
