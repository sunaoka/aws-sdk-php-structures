<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed'|null $status
 * @property string|null $statusReason
 * @property bool|null $memberAccountsEnrolled
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 * @property int|null $numberOfMemberAccountsOptedIn
 */
class GetEnrollmentStatusResponse extends Response
{
}
