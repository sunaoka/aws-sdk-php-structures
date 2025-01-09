<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property list<Shapes\Filter> $filters
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property Shapes\Sort $sort
 */
class SearchAgreementsRequest extends Request
{
    /**
     * @param array{
     *     catalog?: string,
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     sort?: Shapes\Sort
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
