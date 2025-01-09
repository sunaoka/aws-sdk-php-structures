<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\UpdateEnrollmentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property string $statusReason
 */
class UpdateEnrollmentStatusResponse extends Response
{
}
