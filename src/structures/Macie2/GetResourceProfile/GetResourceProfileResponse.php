<?php

namespace Sunaoka\Aws\Structures\Macie2\GetResourceProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $profileUpdatedAt
 * @property int|null $sensitivityScore
 * @property bool|null $sensitivityScoreOverridden
 * @property Shapes\ResourceStatistics|null $statistics
 */
class GetResourceProfileResponse extends Response
{
}
