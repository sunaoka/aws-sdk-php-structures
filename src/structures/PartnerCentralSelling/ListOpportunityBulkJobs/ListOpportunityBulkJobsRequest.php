<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityBulkJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 */
class ListOpportunityBulkJobsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     JobId?: string|null,
     *     Status?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
