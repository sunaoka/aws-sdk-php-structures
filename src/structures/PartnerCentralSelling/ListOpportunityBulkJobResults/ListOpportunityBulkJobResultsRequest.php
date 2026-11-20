<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityBulkJobResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $JobId
 * @property 'SUCCEEDED'|'FAILED'|null $Status
 */
class ListOpportunityBulkJobResultsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     JobId: string,
     *     Status?: 'SUCCEEDED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
