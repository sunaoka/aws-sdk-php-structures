<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property string $statusReason
 * @property bool $memberAccountsEnrolled
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 * @property int $numberOfMemberAccountsOptedIn
 */
class GetEnrollmentStatusResponse extends Response
{
}
