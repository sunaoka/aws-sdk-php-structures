<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateBulkImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $jobName
 * @property 'PENDING'|'CANCELLED'|'RUNNING'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $jobStatus
 */
class CreateBulkImportJobResponse extends Response
{
}
