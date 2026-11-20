<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Keyword
 * @property Shapes\OpportunitySearchFilter|null $Filter
 * @property Shapes\OpportunitySearchSort|null $Sort
 */
class SearchOpportunitiesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Keyword?: string|null,
     *     Filter?: Shapes\OpportunitySearchFilter|null,
     *     Sort?: Shapes\OpportunitySearchSort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
