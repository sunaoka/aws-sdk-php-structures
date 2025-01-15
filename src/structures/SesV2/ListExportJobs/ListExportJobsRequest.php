<?php

namespace Sunaoka\Aws\Structures\SesV2\ListExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $PageSize
 * @property 'METRICS_DATA'|'MESSAGE_INSIGHTS'|null $ExportSourceType
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $JobStatus
 */
class ListExportJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: int|null,
     *     ExportSourceType?: 'METRICS_DATA'|'MESSAGE_INSIGHTS'|null,
     *     JobStatus?: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
