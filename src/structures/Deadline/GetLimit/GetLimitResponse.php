<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $displayName
 * @property string $amountRequirementName
 * @property int<-1, 2147483647> $maxCount
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $farmId
 * @property string $limitId
 * @property int<0, 2147483647> $currentCount
 * @property string|null $description
 */
class GetLimitResponse extends Response
{
}
