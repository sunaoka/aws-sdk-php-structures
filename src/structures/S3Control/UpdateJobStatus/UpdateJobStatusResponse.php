<?php

namespace Sunaoka\Aws\Structures\S3Control\UpdateJobStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'|null $Status
 * @property string|null $StatusUpdateReason
 */
class UpdateJobStatusResponse extends Response
{
}
