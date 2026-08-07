<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRateLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $rateLimitId
 * @property string $gatewayIdentifier
 * @property string|null $description
 * @property list<string> $dimensionKeys
 * @property list<Shapes\LimitEntry> $entries
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateGatewayRateLimitResponse extends Response
{
}
