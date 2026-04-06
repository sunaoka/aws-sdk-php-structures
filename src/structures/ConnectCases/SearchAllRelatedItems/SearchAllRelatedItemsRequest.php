<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\RelatedItemTypeFilter>|null $filters
 * @property list<Shapes\SearchAllRelatedItemsSort>|null $sorts
 */
class SearchAllRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\RelatedItemTypeFilter>|null,
     *     sorts?: list<Shapes\SearchAllRelatedItemsSort>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
