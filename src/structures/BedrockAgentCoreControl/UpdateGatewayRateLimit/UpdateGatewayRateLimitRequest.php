<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $rateLimitId
 * @property string|null $description
 * @property list<Shapes\LimitEntry> $entries
 */
class UpdateGatewayRateLimitRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     rateLimitId: string,
     *     description?: string|null,
     *     entries: list<Shapes\LimitEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
