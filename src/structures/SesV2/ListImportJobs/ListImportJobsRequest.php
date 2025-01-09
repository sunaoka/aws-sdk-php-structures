<?php

namespace Sunaoka\Aws\Structures\SesV2\ListImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUPPRESSION_LIST'|'CONTACT_LIST' $ImportDestinationType
 * @property string $NextToken
 * @property int $PageSize
 */
class ListImportJobsRequest extends Request
{
    /**
     * @param array{
     *     ImportDestinationType?: 'SUPPRESSION_LIST'|'CONTACT_LIST',
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
