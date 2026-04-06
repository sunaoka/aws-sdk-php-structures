<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetAccountActivity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $activityId
 * @property string $title
 * @property string $description
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'EXPIRING' $status
 * @property string $instructionsUrl
 * @property Shapes\ActivityReward $reward
 * @property int|null $estimatedTimeToCompleteInMinutes
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class GetAccountActivityResponse extends Response
{
}
