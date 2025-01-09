<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended' $Status
 * @property string $StatusUpdateReason
 */
class UpdateJobStatusResponse extends Response
{
}
