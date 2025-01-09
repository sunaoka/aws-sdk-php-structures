<?php

namespace Sunaoka\Aws\Structures\SesV2\ListExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 * @property 'METRICS_DATA'|'MESSAGE_INSIGHTS' $ExportSourceType
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED' $JobStatus
 */
class ListExportJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int,
     *     ExportSourceType?: 'METRICS_DATA'|'MESSAGE_INSIGHTS',
     *     JobStatus?: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
