<?php

namespace Sunaoka\Aws\Structures\Macie2\GetResourceProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $profileUpdatedAt
 * @property int $sensitivityScore
 * @property bool $sensitivityScoreOverridden
 * @property Shapes\ResourceStatistics $statistics
 */
class GetResourceProfileResponse extends Response
{
}
