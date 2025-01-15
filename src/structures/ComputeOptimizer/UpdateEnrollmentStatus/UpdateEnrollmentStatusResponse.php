<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\UpdateEnrollmentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed'|null $status
 * @property string|null $statusReason
 */
class UpdateEnrollmentStatusResponse extends Response
{
}
