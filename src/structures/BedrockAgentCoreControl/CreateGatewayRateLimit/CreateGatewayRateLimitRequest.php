<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string|null $clientToken
 * @property string|null $rateLimitId
 * @property string|null $description
 * @property list<string> $dimensionKeys
 * @property list<Shapes\LimitEntry> $entries
 */
class CreateGatewayRateLimitRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     clientToken?: string|null,
     *     rateLimitId?: string|null,
     *     description?: string|null,
     *     dimensionKeys: list<string>,
     *     entries: list<Shapes\LimitEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
