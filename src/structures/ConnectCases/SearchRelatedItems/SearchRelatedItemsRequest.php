<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $domainId
 * @property list<Shapes\RelatedItemTypeFilter>|null $filters
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class SearchRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     domainId: string,
     *     filters?: list<Shapes\RelatedItemTypeFilter>|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
