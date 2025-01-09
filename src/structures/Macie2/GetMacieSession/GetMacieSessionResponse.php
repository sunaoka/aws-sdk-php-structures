<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMacieSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS' $findingPublishingFrequency
 * @property string $serviceRole
 * @property 'PAUSED'|'ENABLED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetMacieSessionResponse extends Response
{
}
