<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property 'SUCCEEDED'|'FAILED'|null $Status
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomerAccountBulkJobResultsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     Status?: 'SUCCEEDED'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
