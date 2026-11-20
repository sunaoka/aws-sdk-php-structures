<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property Shapes\CustomerAccountBulkJobFilter|null $Filter
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomerAccountBulkJobsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Filter?: Shapes\CustomerAccountBulkJobFilter|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
