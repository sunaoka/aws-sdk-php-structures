<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $catalog
 * @property list<Shapes\Filter>|null $filters
 * @property Shapes\Sort|null $sort
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class SearchAgreementsRequest extends Request
{
    /**
     * @param array{
     *     catalog?: string|null,
     *     filters?: list<Shapes\Filter>|null,
     *     sort?: Shapes\Sort|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
