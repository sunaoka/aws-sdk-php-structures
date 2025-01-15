<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMacieSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null $findingPublishingFrequency
 * @property string|null $serviceRole
 * @property 'PAUSED'|'ENABLED'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetMacieSessionResponse extends Response
{
}
