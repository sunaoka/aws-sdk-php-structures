<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyLastUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property Shapes\KeyLastUsageData|null $KeyLastUsage
 * @property \Aws\Api\DateTimeResult|null $TrackingStartDate
 * @property \Aws\Api\DateTimeResult|null $KeyCreationDate
 */
class GetKeyLastUsageResponse extends Response
{
}
