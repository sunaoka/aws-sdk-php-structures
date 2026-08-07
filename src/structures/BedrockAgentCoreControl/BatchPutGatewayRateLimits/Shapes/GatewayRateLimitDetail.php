<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\BatchPutGatewayRateLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rateLimitId
 * @property string $gatewayIdentifier
 * @property string|null $description
 * @property list<string> $dimensionKeys
 * @property list<LimitEntry> $entries
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GatewayRateLimitDetail extends Shape
{
    /**
     * @param array{
     *     rateLimitId: string,
     *     gatewayIdentifier: string,
     *     description?: string|null,
     *     dimensionKeys: list<string>,
     *     entries: list<LimitEntry>,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
