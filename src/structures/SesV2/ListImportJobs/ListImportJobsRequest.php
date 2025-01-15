<?php

namespace Sunaoka\Aws\Structures\SesV2\ListImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUPPRESSION_LIST'|'CONTACT_LIST'|null $ImportDestinationType
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListImportJobsRequest extends Request
{
    /**
     * @param array{
     *     ImportDestinationType?: 'SUPPRESSION_LIST'|'CONTACT_LIST'|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
