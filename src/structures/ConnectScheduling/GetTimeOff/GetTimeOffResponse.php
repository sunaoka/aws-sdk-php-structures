<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\GetTimeOff;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TimeOffId
 * @property string $UserId
 * @property string $ShiftActivityId
 * @property \Aws\Api\DateTimeResult $StartAt
 * @property \Aws\Api\DateTimeResult $EndAt
 * @property 'PENDING'|'APPROVED'|'REJECTED'|'CANCELLED'|'AWAITING_APPROVAL' $Status
 * @property string|null $Description
 * @property list<Shapes\TimeOffValidationResult>|null $ValidationResults
 * @property Shapes\ActorInfo $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property Shapes\ActorInfo|null $UpdatedBy
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class GetTimeOffResponse extends Response
{
}
